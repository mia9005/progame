<?php

class CustomerDAO {

    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Customer");
    }

    public static function getAllCustomers(){
        $sql = "SELECT * FROM customers";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();

    }

    public static function getCustomerByUsername(string $username) {
        $sql = "SELECT * FROM customers WHERE username=:user";

        self::$db->query($sql);
        self::$db->bind(":user",$username);
        self::$db->execute();

        return self::$db->singleResult();
    }
    public static function insertCustomer(Customer $newCustomer){
        $sql = "INSERT INTO customers(fName,lName,username,email,password) VALUES(:fName,:lName,:user,:email,:password)";

        self::$db->query($sql);
 
        self::$db->bind(":fName",$newCustomer->getFName());
        self::$db->bind(":lName",$newCustomer->getLName());
        self::$db->bind(":user",$newCustomer->getUsername());
        self::$db->bind(":email",$newCustomer->getEmail());
        self::$db->bind(":password",$newCustomer->getPassword());

        self::$db->execute();
        return self::$db->lastInsertedId();
    }

    public static function updateCustomer(Customer $changeInfo,$current) {
        $sql ="UPDATE customers SET fName=:fName, lName=:lName, username=:username, email=:email, password=:password WHERE id=:id";

        self::$db->query($sql);

        self::$db->bind(":id",$currentId->getId());

        if(empty($changeInfo->getfName())){
            self::$db->bind(":fName",$current->getFName());
        } else {
            self::$db->bind(":fName",$changeInfo->getFName());
        }
        if(empty($changeInfo->getLName())){
            self::$db->bind(":lName",$current->getLName());
        } else {
            self::$db->bind(":lName",$changeInfo->getLName());
        }
        if(empty($changeInfo->getUsername())){
            self::$db->bind(":username",$current->getUsername());
        } else {
            self::$db->bind(":username",$changeInfo->getUsername());
        }
        if(empty($changeInfo->getEmail())){
            self::$db->bind(":email",$current->getEmail());
        } else {
            self::$db->bind(":email",$changeInfo->getEmail());
        }
        
        self::$db->bind(":password",$changeInfo->getPassword());

        self::$db->execute();

        return self::$db->lastInsertedId();

    }
}