<?php
require_once("inc/config.inc.php");
require_once("inc/entities/Game.class.php");
require_once("inc/entities/GameRepository.class.php");
require_once("inc/entities/Test.class.php");
require_once("inc/entities/Img.class.php");
require_once("inc/entities/Category.class.php");
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
    // var_dump($result);
    
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

echo Page::PageHead();
echo Page::PageHeader();

if( !empty($_GET) ){
    if(!empty($_GET['sortBy'])){
        $games->sortGame($_GET['sortBy']);
        echo Page::PageStoreCatalog($games->getGameList());
        
    }else if(!empty($_GET['product'])){
        echo Page::PageProduct($games->getGameByName($_GET['product']));
    }
}else{
    if($games->getTotalGames() == 0 ){
        echo Page::PageStoreCatalog('');
    }else{
        echo Page::PageStoreCatalog($games->getGameList());

    }
}


echo Page::PageFooter();
echo Page::PageEnd();