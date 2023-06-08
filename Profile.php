<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Customer.class.php");
require_once("inc/entities/StoreEvent.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/CustomerDAO.class.php");
require_once("inc/DAO/EventDAO.class.php");
require_once("inc/Utilities/LoginManager.class.php");
require_once("inc/Utilities/Page.class.php");


session_start();
LoginManager::verifyLogin();

CustomerDAO::startDb();
EventDAO::startDb();
$currentUser=$_SESSION["loginUser"];

echo Page::PageHead();
echo Page::PageHeader();


if (! empty($_POST["eventDate"]) ) {
    $newEvent = new StoreEvent();
    $newEvent->setUserId($_POST["userId"]);
    $newEvent->setTitle($_POST["title"]);
    $newEvent->setEventDate($_POST["eventDate"]);
    $newEvent->setDetails($_POST["details"]);

    EventDAO::insetNewEvent($newEvent);
    Page::successAlert("New Event registered sucessfully!");
}

echo Page::profilePage($currentUser);

echo Page::PageFooter();
echo Page::PageEnd();