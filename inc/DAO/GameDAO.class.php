<?php

class GameDAO {

    private static $db;
    
    public static function startDb(){
        self::$db = new PDOService("Game");
    }

    public static function selectAllProducts(){

        $sql = "SELECT * FROM game";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function selectProductById( int $id ){

        $sql = "SELECT * FROM game WHERE id=:id";

        self::$db->query($sql);
        
        self::$db->bind(":id",$id);

        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function deletProductById( int $id ){

        $sql = "DELETE FROM game WHERE id=:id";

        self::$db->query($sql);

        self::$db->bind(":id",$id);

        self::$db->execute();

        return self::$db->rowCount();
    }

    public static function insertNewProduct( Game $product ){

        $sql = "INSERT FROM game(gameName,price,releaseDate,esbr,maxPlayer,brand,complexity) VALUES(:name,:price,:releaseDate,:esbr,:maxPlayer,:brand,:complexity)";

        self::$db->query($sql);

        self::$db->bind(":name",$product->getName());
        self::$db->bind(":price",$product->getPrice());
        self::$db->bind(":releaseDate",$product->getReleaseDate());
        self::$db->bind(":esbr",$product->getEsbr());
        self::$db->bind(":maxPlayer",$product->getMaxPlayer());
        self::$db->bind(":brand",$product->getBrand());
        self::$db->bind(":complexity",$product->getComplexity());

        self::$db->execute();

        return self::$db->rowCount();
    }

    public static function updateProductById( Game $product ){

        $sql = "UPDATE game SET name=:name,price=:price,releaseDate=:releaseDate,esbr=:esbr,maxPlayer=:maxPlayer,brand=:brand,complexity=:complexity WHERE id=:id";

        self::$db->query($sql);

        self::$db->bind(":id",$id);
        self::$db->bind(":name",$product->getName());
        self::$db->bind(":price",$product->getPrice());
        self::$db->bind(":releaseDate",$product->getReleaseDate());
        self::$db->bind(":esbr",$product->getEsbr());
        self::$db->bind(":maxPlayer",$product->getMaxPlayer());
        self::$db->bind(":brand",$product->getBrand());
        self::$db->bind(":complexity",$product->getComplexity());

        self::$db->execute();

        return self::$db->rowCount();
    }

}