<?php
    class Game {

        /**
         * @var integer id
         */
        private int $gameId;

        /**
         * @var string name
         */
        private string $gameName;

        /**
         * @var float price
         */
        private float $price;

        /**
         * @var string year published
         */
        private string $releaseDate;

        /**
         * @var string minimun age
         */
        private string $esbr;

        /**
         * @var integer max player
         */
        private int $maxPlayer;

        /**
         * @var string number of rates
         */
        private string $brand;

        /**
         * @var string complexity
         */
        private string $complexity;

        // /**
        //  * game constructor
        //  *
        //  * @param integer $gameId
        //  * @param string $gameName
        //  * @param float $price
        //  * @param string $releaseDate
        //  * @param string $esbr
        //  * @param integer $maxPlayer
        //  * @param string $brand
        //  * @param string $complexity
        //  */
        // public function __construct(

        //     int $gameId,
        //     string $gameName,
        //     float $price, 
        //     string $releaseDate,
        //     string $esbr, 
        //     int $maxPlayer, 
        //     string $brand,
        //     string $complexity,

        // ){
        //     $this->gameId = $gameId;
        //     $this->gameName = $gameName;
        //     $this->price = $price;
        //     $this->releaseDate = $releaseDate;
        //     $this->esbr = $esbr;
        //     $this->maxPlayer = $maxPlayer;
        //     $this->brand = $brand;
        //     $this->complexity = $complexity;
        // }

        // Get functions
        /**
         * @return integer
         */
        public function getGameId() : int {
            return $this->gameId;
        }

        /**
         * @return string
         */
        public function getGameName() : string {
            return $this->gameName;
        }

        /**
         *
         * @return string
         */
        public function getReleaseDate() : string {
            return $this->releaseDate;
        }

        /**
         * @return float
         */
        public function getPrice() : float {
            return $this->price;
        }

        /**
         * @return integer
         */
        public function getMaxPlayer() : int {
            return $this->maxPlayer;
        }

        /**
         * @return string
         */
        public function getEsbr() : string{
            return $this->esbr;
        }

        /**
         * @return string
         */
        public function getBrand() : string {
            return $this->brand;
        }

        /**
         * @return string
         */
        public function getComplexity() : string{
            return $this->complexity;
        }

        // Set functions
        /**
         * @param string $name
         * @return void
         */
        public function setGameName( string $name ) : void  {
            $this->gameName = $name ;
        }
        
        /**
         * @param string $year
         * @return void
         */
        public function setReleaseDate( string $year ) : void  {
            $this->releaseDate = $year ;
        }
        
        /**
         * @param float $price
         * @return void
         */
        public function setPrice( float $price ) : void  {
            $this->price = $price  ;
        }
        
        /**
         * @param integer $maxPlayer
         * @return void
         */
        public function setMaxPlayer( int $maxPlayer ) : void  {
            $this->maxPlayer = $maxPlayer ;
        }
        
        /**
         * @param string $esbr
         * @return void
         */
        public function setEsbr( string $esbr ) : void  {
            $this->esbr = $esbr ;
        }
        
        /**
         * @param string $brand
         * @return void
         */
        public function setBrand(  string $brand ) : void {
            $this->brand = $brand ;
        }
        
        /**
         * @param string $complexity
         * @return void
         */
        public function setComplexity( string $complexity ) : void {
            $this->complexity = $complexity ;
        }

    }