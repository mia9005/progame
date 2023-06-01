<?php

class GameDAO {

    private static $db;
    
    public static function startDb(){
        self::$db = new PDOService("products");
    }

    public static function selectAllProducts(){

        $sql = "SELECT * FROM Products";

        self::$db->query($sql);

        self::$db->excecute();

        return self::$db->resultSet();
    }

    public static function selectProductById( int $id ){

        $sql = "SELECT * FROM Products WHERE id=:id";

        self::$db->query($sql);
        
        self::$db->bind(":id",$id);

        self::$db->excecute();

        return self::$db->resultSet();
    }

    public static function deletProductById( int $id ){

        $sql = "DELETE FROM Products WHERE id=:id";

        self::$db->query($sql);

        self::$db->bind(":id",$id);

        self::$db->excecute();

        return self::$db->rowCount();
    }

    public static function insertNewProduct( Game $product ){

        $sql = "INSERT FROM products(name,price,releaseDate,category,esbr,maxPlayer,brand,complexity) VALUES(:name,:price,:releaseDate,:category,:esbr,:maxPlayer,:brand,:complexity)";

        self::$db->query($sql);

        self::$db->bind(":name",$product->getName());
        self::$db->bind(":price",$product->getPrice());
        self::$db->bind(":releaseDate",$product->getReleaseDate());
        self::$db->bind(":category",$product->getCategory());
        self::$db->bind(":esbr",$product->getEsbr());
        self::$db->bind(":maxPlayer",$product->getMaxPlayer());
        self::$db->bind(":brand",$product->getBrand());
        self::$db->bind(":complexity",$product->getComplexity());

        self::$db->excecute();

        return self::$db->rowCount();
    }

    public static function updateProductById( Game $product ){

        $sql = "UPDATE products SET name=:name,price=:price,releaseDate=:releaseDate,category=:category,esbr=:esbr,maxPlayer=:maxPlayer,brand=:brand,complexity=:complexity WHERE id=:id";

        self::$db->query($sql);

        self::$db->bind(":id",$id);
        self::$db->bind(":name",$product->getName());
        self::$db->bind(":price",$product->getPrice());
        self::$db->bind(":releaseDate",$product->getReleaseDate());
        self::$db->bind(":category",$product->getCategory());
        self::$db->bind(":esbr",$product->getEsbr());
        self::$db->bind(":maxPlayer",$product->getMaxPlayer());
        self::$db->bind(":brand",$product->getBrand());
        self::$db->bind(":complexity",$product->getComplexity());

        self::$db->excecute();

        return self::$db->rowCount();
    }

}