<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Customer.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/CustomerDAO.class.php");
require_once("inc/Utilities/Page.class.php");

session_start();
CustomerDAO::startDb();

echo Page::PageHead();

if(!empty($_POST)) {
    $newCustomer = new Customer();
    $newCustomer->setFName($_POST['fName']);
    $newCustomer->setLName($_POST['lName']);
    $newCustomer->setUsername($_POST['username']);
    $newCustomer->setEmail($_POST['email']);

    $newPass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $newCustomer->setPassword($newPass);
    $customerExist = CustomerDAO::getCustomerByUsername($_POST['username']);
    
    if(!$customerExist) {
        CustomerDAO::insertCustomer($newCustomer);
        unset($_POST);
        echo Page::successMessage();
    }
}

echo Page::PageHead();
echo Page::PageHeader();
echo Page::formRegister();
echo Page::PageFooter();
echo Page::PageEnd();