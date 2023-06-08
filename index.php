<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/Game.class.php");
require_once("inc/Entities/Img.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/DAO/GameDAO.class.php");
require_once("inc/DAO/ImgDAO.class.php");
require_once("inc/Utilities/Page.class.php");

GameDAO::startDb();
ImgDAO::startDb();

$product = GameDAO::selectAllProducts();

echo Page::PageHead();
echo Page::PageHeader();
echo Page::PageHome($product);
echo Page::PageFooter();
echo Page::PageEnd();