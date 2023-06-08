<?php

class Img {

    private int $gameId;
    private string $imgLink;
    

    public function getGameId() : int {
        return $this->gameId;
    }

    public function getImgLink() : string {
        return $this->imgLink;
    }

    public function SetImgLink( string $newImg ) : string {
        $this->imgLink = $newImg;
    }
}