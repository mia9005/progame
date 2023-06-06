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

if(!empty($_POST)) {
    $newInfo = new Customer();
    $newInfo->setFName($_POST['new-fName']);
    $newInfo->setLName($_POST['new-lName']);
    $newInfo->setUsername($_POST['new-username']);
    $newInfo->setEmail($_POST['new-email']);

    $newPass = password_hash($_POST['new-password'], PASSWORD_DEFAULT);
    $newInfo->setPassword($newPass);

    $customerExist = CustomerDAO::getCustomerByUsername($_POST['new-username']);
    if(!$customerExist) {
        CustomerDAO::updateCustomer($newInfo);
        unset($_POST);
    }
}

echo Page::PageHead();
echo Page::PageHeader();
echo Page::formUpdate($currentUser);
echo Page::PageFooter();
echo Page::PageEnd();