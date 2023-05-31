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

    public static function sortById($game1, $game2){
        return $game1->id <=> $game2->id;
    }

    public static function sortByName($game1, $game2){
        return $game1->name <=> $game2->name;
    }

    public static function sortByPrice($game1, $game2){
        return $game1->price <=> $game2->price;
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

}