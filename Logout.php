<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/Customer.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/CustomerDAO.class.php");
require_once("inc/Utilities/Page.class.php");
require_once("inc/Utilities/LoginManager.class.php");
require_once("Login.php");
require_once("Profile.php");

session_start();

session_destroy();

header("Location: login.php");
// change the Location to home-page
echo Page::PageHead();
echo Page::PageHeader();
echo Page::loginForm();
echo Page::PageFooter();
echo Page::PageEnd();