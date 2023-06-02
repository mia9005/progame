<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/Customer.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/CustomerDAO.class.php");
require_once("inc/Utilities/Page.class.php");
require_once("inc/Utilities/LoginManager.class.php");


if(!empty($_POST)){
    CustomerDAO::init();
    $username = $_POST['signUsername'];
    $getInfo = CustomerDAO::getCustomerByUsername($username);

    if((gettype($getInfo) == "object") && (get_class($getInfo) == "Customer")) {
        if($getInfo->validateCustomer($_POST['signPassword'])) {
            session_start();
            $_SESSION["logged"] = true;
            $_SESSION['signUsername'] = $getInfo;

            header("Location: updateaccount.php");
            exit();
        }
    }
}

echo Page::PageHead();
echo Page::PageHeader();
echo Page::loginForm();
echo Page::PageFooter();
echo Page::PageEnd();