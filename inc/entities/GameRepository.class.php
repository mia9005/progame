<?php

class GameRepository {

    private array $gameList;

    public function setGameList( array $newGameList ) : void {
        $this->gameList = $newGameList;
    }

    public function getGameList() : array {
        return $this->gameList;
    }

    public function includeNewGame( $newGame ) : void {
        $this->gameList[] = $newGame;
    }

    public function getTotalGames() : int {
        return count($this->gameList);
    }

    public function getGameByName( string $name ) : Game {
        return $this->gameList[$name];
    }

    public static function sortById($game1, $game2){
        return $game1->getGameId() <=> $game2->getGameId();
    }

    public static function sortByName($game1, $game2){
        return $game1->getGameName() <=> $game2->getGameName();
    }

    public static function sortByPrice($game1, $game2){
        return $game1->getPrice() <=> $game2->getPrice();
    }

    public function sortGame( string $sortBy ) {

        switch($sortBy) {
            case "id":
                usort($this->gameList,"self::sortById");
            break;
            case "name":
                usort($this->gameList,"self::sortByName");
            break;
            case "price":
                usort($this->gameList,"self::sortByPrice");
            break;
        }
    }

    public function setGamesCatalogByPage(array $newCatalog) {
        $count = 1;
        for($i = 0; $i < count($newCatalog); $i+=25) {
            
            for ($j = $i; $j < ($i + 25); $j++) {
                if ( $j > count($newCatalog)-1 ) {
                    break;
                }
                $this->gameList[($count)][] = $newCatalog[$j];
            }
           $count++;
        }

        return $this->gameList;
    }

}