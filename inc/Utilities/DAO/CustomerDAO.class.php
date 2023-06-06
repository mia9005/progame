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

    public static function updateCustomer(Customer $changeInfo) {
        $sql ="UPDATE customers SET fName=:fName, lName=:lName, username=:username, email=:email password=:password";

        self::$db->query($sql);
        self::$db->bind(":fName",$changeInfo->getFName());
        self::$db->bind(":lName",$changeInfo->getLName());
        self::$db->bind(":username",$changeInfo->getUsername());
        self::$db->bind(":email",$changeInfo->getEmail());
        self::$db->bind(":email",$changeInfo->getEmail());
        self::$db->bind(":password",$changeInfo->getPassword());

        self::$db->execute();

        return self::$db->lastInsertedId();

    }
}