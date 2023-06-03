<?php
require_once("inc/config.inc.php");
require_once("inc/entities/Game.class.php");
require_once("inc/entities/GameRepository.class.php");
require_once("inc/entities/Test.class.php");
require_once("inc/entities/Img.class.php");
require_once("inc/Utilities/FileManager.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/DAO/GameDAO.class.php");
require_once("inc/DAO/ImgDAO.class.php");
require_once("inc/Utilities/Page.class.php");

// $result = readCustonFile("./data/test_gallery.csv");
GameDAO::startDb();
ImgDAO::startDb();

$result = GameDAO::selectAllProducts();
$gameList = [];

// $list = toArray($result);
foreach($result as $game){
    $gameList[$game->getGameName()] = $game;
    
}
// var_dump($gameList);
$games = new GameRepository();
$games->setGameList($gameList);
$img = ImgDAO::getAllImages();
// var_dump($games->getGameList()[0]->getGameId());

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
    echo Page::PageStoreCatalog($games->getGameList());
}
echo Page::PageFooter();
echo Page::PageEnd();