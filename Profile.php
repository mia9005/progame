<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Customer.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/CustomerDAO.class.php");
require_once("inc/Utilities/LoginManager.class.php");
require_once("inc/Utilities/Page.class.php");


session_start();
LoginManager::verifyLogin();

CustomerDAO::startDb();
$currentUser=$_SESSION["loginUser"];

echo Page::PageHead();
echo Page::PageHeader();

echo Page::profileTable($currentUser);

echo Page::PageFooter();
echo Page::PageEnd();