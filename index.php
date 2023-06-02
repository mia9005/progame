<?php
require_once("inc/config.inc.php");
require_once("inc/entities/Game.class.php");
require_once("inc/entities/GameRepositoryclass.php");
require_once("inc/entities/Test.class.php");
require_once("inc/Utilities/FileManager.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/Page.class.php");

$result = readCustonFile("./data/test_gallery.csv");
$list = toArray($result);
$games = new GameRepository();
$games->setGameList($list);

echo Page::PageHead();
echo Page::PageHeader();
if( !empty($_GET) ){
    if(!empty($_GET['sortBy'])){
        $games->sortGame($_GET['sortBy']);
        echo Page::PageStoreCatalog($games->getGameList());
    }else if(!empty($_GET['product'])){
        
        echo Page::PageProduct($list[$_GET['product']]);
    }
}else{
    echo Page::PageStoreCatalog($games->getGameList());
}
echo Page::PageFooter();
echo Page::PageEnd();