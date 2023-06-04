<?php

class Category {

    private int $gameId;
    private string $categoryName;

    public function getGameId() : int {
        return $this->gameId;
    }

    public function getCategory() : string {
        return $this->categoryName;
    }

    public function setCategory( string $newCategory) : void {
        $this->category = $newCategory;
    }

    
}