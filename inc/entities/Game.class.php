<?php
    class Game {

        /**
         * @var integer id
         */
        private int $id;

        /**
         * @var string name
         */
        private string $name;

        /**
         * @var float price
         */
        private float $price;

        /**
         * @var integer year published
         */
        private int $year;
        
        /**
         * @var string category
         */
        private int $category;

        /**
         * @var integer minimun age
         */
        private int $esbr;

        /**
         * @var integer max player
         */
        private int $maxPlayer;

        /**
         * @var string number of rates
         */
        private string $brand;

        /**
         * @var integer complexity
         */
        private int $complexity;

        /**
         * game constructor
         *
         * @param integer $id
         * @param string $name
         * @param float $price
         * @param integer $year
         * @param string $category
         * @param integer $esbr
         * @param integer $maxPlayer
         * @param string $brand
         * @param int $complexity
         */
        public function __construct(

            int $id,
            string $name,
            float $price, 
            int $year,
            string $category, 
            int $esbr, 
            int $maxPlayer, 
            int $brand,
            int $complexity,
        ){
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->year = $year;
            $this->category = $category;
            $this->esbr = $esbr;
            $this->maxPlayer = $maxPlayer;
            $this->brand = $brand;
            $this->complexity = $complexity;
        }

        // Get functions
        /**
         * @return integer
         */
        public function getId() : int {
            return $this->id;
        }

        /**
         * @return string
         */
        public function getName() : string {
            return $this->name;
        }

        /**
         *
         * @return integer
         */
        public function getYear() : int {
            return $this->year;
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
        public function getCategory() : string {
            return $this->category;
        }

        /**
         * @return integer
         */
        public function getEsbr() : int{
            return $this->esbr;
        }

        /**
         * @return string
         */
        public function getBrand() : string {
            return $this->brand;
        }

        /**
         * @return float
         */
        public function getComplexity() : float{
            return $this->complexity;
        }

        // Set functions
        /**
         * @param string $name
         * @return void
         */
        public function setName( string $name ) : void  {
            $this->name = $name ;
        }
        
        /**
         * @param integer $year
         * @return void
         */
        public function setYear( int $year ) : void  {
            $this->year = $year ;
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
         * @param integer $esbr
         * @return void
         */
        public function setEsbr( int $esbr ) : void  {
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
         * @param string $rateNum
         * @return void
         */
        public function setCategory( string $category ) : void  {
            $this->category = $category ;
        }
        
        /**
         * @param float $complexity
         * @return void
         */
        public function setComplexity( float $complexity ) : void {
            $this->complexity = $complexity ;
        }

    }