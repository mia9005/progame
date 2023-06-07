<?php

class CategoryDAO {

    private static $db;

    public static function startDb(){
        self::$db = new PDOService("Category");
    }

    public static function getAllCategory(){
        $sql = "SELECT * FROM category";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getCategoryById( int $gameId ){

        $sql = "SELECT categoryName FROM category WHERE gameId=:id";

        self::$db->query($sql);

        self::$db->bind(":id",$gameId);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getAllUniqueCategories(){

        $sql = 'SELECT DISTINCT categoryName FROM category';

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }
}