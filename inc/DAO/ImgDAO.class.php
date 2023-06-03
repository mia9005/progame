<?php

class ImgDAO {

    private static $db;

    public static function startDb(){
        self::$db = new PDOService("Img");
    }

    public static function getAllImages(){
        $sql = "SELECT * FROM gameimages";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getImagesById( int $gameId ){

        $sql = "SELECT imgLink FROM gameimages WHERE gameId=:id";

        self::$db->query($sql);

        self::$db->bind(":id",$gameId);

        self::$db->execute();

        return self::$db->resultSet();
    }
}