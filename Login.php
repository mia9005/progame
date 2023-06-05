<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/Customer.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/CustomerDAO.class.php");
require_once("inc/Utilities/Page.class.php");
require_once("inc/Utilities/LoginManager.class.php");

if(!empty($_POST)) {
    CustomerDAO::startDb();
    
    $userName = $_POST["loginUser"];
    $password = $_POST["loginPassword"];
    
    $userExist = CustomerDAO::getCustomerByUsername($userName);
    
    if((gettype($userExist) === "object") && (get_class($userExist) === 'Customer')) {
        var_dump($password);
        if($userExist->validateCustomer($password)) {
            session_start();

            $_SESSION["logged"] = true;
            $_SESSION["loginUser"] = $userExist;

            echo "Login Success";
            header("Location: Profile.php");
            exit();
        }
    }
}

echo Page::PageHead();
echo Page::PageHeader();
echo Page::loginForm();
echo Page::PageFooter();
echo Page::PageEnd();