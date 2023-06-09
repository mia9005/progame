<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/Game.class.php");
require_once("inc/Entities/GameRepository.class.php");
require_once("inc/Entities/Test.class.php");
require_once("inc/Entities/Img.class.php");
require_once("inc/Entities/Category.class.php");
require_once("inc/Utilities/FileManager.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/DAO/GameDAO.class.php");
require_once("inc/DAO/ImgDAO.class.php");
require_once("inc/DAO/CategoryDAO.class.php");
require_once("inc/Utilities/Page.class.php");

// $result = readCustonFile("./data/test_gallery.csv");
GameDAO::startDb();
ImgDAO::startDb();
CategoryDAO::startDb();

$result =[];
// $list = toArray($result);
if( !empty($_POST)){
    if(!empty($_POST['catalog_filter']))
    $result = GameDAO::filterProducts($_POST);
    $cookieValue = json_encode($_POST);
    $cookieSearch = 'activeSearch';
    setcookie($cookieSearch,$cookieValue, time() + (3600),"/" );
    
}else if(!empty($_COOKIE['activeSearch'])){
    $result = GameDAO::filterProducts(json_decode($_COOKIE['activeSearch'],true));

}else{
    $result = GameDAO::selectAllProducts();
}

$gameList = [];
foreach($result as $game){
    $gameList[$game->getGameName()] = $game;
}
// var_dump($gameList);
$games = new GameRepository();
$games->setGameList($gameList);
$img = ImgDAO::getAllImages();
$brands = GameDAO::getAllUniqueBrands();
$categories = CategoryDAO::getAllUniqueCategories();

echo Page::PageHead();
echo Page::PageHeader();

if( !empty($_GET) ){
    if(!empty($_GET['sortBy'])){
        $games->sortGame($_GET['sortBy']);
        echo Page::PageStoreCatalog($games->getGameList(),$brands,$categories);
        
    }else if(!empty($_GET['product'])){
        $gameSelected = $games->getGameByName($_GET['product']);
        $imgs = ImgDAO::getImagesById($gameSelected->getGameId());
        $category = CategoryDAO::getCategoryById($gameSelected->getGameId());
        echo Page::PageProduct($gameSelected,$imgs,$category);
    }
}else{
    if($games->getTotalGames() == 0 ){
        echo Page::PageStoreCatalog('');
    }else{
        echo Page::PageStoreCatalog($games->getGameList(),$brands,$categories);

    }
}


echo Page::PageFooter();
echo Page::PageEnd();