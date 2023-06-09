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

    public static function filterProducts(array $filterList) {

        $sql = '';

        $params = array(); // Array to store the parameter values for binding

        if ($filterList['category'] !== 'all') {
            $sql .= 'SELECT * FROM game INNER JOIN category ON game.gameId = category.gameId WHERE category.categoryName = :category';
            $params[':category'] = $filterList['category'];
        }else{

            $sql = 'SELECT * FROM game WHERE 1=1'; // Start with a base query that selects all records
        }       
    
        if ($filterList['price'] !== 'all') {
            $sql .= ' AND price >= :price1 AND price <= :price2';
            $price = explode("_", $filterList['price']);
            $params[':price1'] = $price[0];
            $params[':price2'] = $price[1];
        }
        if ($filterList['releaseDate'] != '') {
            $sql .= ' AND releaseDate = :releaseDate';
            $params[':releaseDate'] = $filterList['releaseDate'];
        }
        if ($filterList['name'] != '') {
            $sql .= ' AND gameName LIKE :name';
            $params[':name'] = '%' . $filterList['name'] . '%';
        }
        if ($filterList['esbr'] !== 'all') {
            $sql .= ' AND esbr = :esbr';
            $params[':esbr'] = $filterList['esbr'];
        }
        if ($filterList['maxPlayers'] !== 'all') {
            $sql .= ' AND maxPlayers = :maxPlayers';
            $params[':maxPlayers'] = $filterList['maxPlayers'];
        }
        if ($filterList['brand'] !== 'all') {
            $sql .= ' AND brand = :brand';
            $params[':brand'] = $filterList['brand'];
        }
        if ($filterList['complexity'] !== 'all') {
            $sql .= ' AND complexity = :complexity';
            $params[':complexity'] = $filterList['complexity'];
        }
    
        self::$db->query($sql);
    
        foreach ($params as $param => $value) {
            self::$db->bind($param, $value);
        }
    
        self::$db->execute();
    
        return self::$db->resultSet();
    }

    public static function getAllUniqueBrands(){

        $sql = 'SELECT DISTINCT brand FROM game';

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }
}    