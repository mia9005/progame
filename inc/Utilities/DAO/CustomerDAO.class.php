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
}