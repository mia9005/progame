<?php
    class Games {

        /**
         * @var integer id
         */
        private int $id;

        /**
         * @var string name
         */
        private string $name;

        /**
         * @var integer year published
         */
        private int $year;

        /**
         * @var integer min player
         */
        private int $minPlayer;

        /**
         * @var integer max player
         */
        private int $maxPlayer;

        /**
         * @var integer play time
         */
        private int $playTime;

        /**
         * @var integer minimun age
         */
        private int $minAge;

        /**
         * @var integer number of rates
         */
        private int $rateNum;

        /**
         * @var float rate average
         */
        private float $rateAvg;

        /**
         * @var integer bbg rank
         */
        private int $BBGRank;

        /**
         * @var float complexity
         */
        private float $complexity;

        /**
         * @var integer owned users
         */
        private int $ownedUsers;

        /**
         * @var array mechanics
         */
        private array $mechanics;

        /**
         * @var array domains
         */
        private array $domains;

        /**
         * game constructor
         *
         * @param integer $id
         * @param string $name
         * @param integer $year
         * @param integer $minPlayer
         * @param integer $maxPlayer
         * @param integer $playTime
         * @param integer $minAge
         * @param integer $rateNum
         * @param float $rateAvg
         * @param integer $BGGRank
         * @param float $complexity
         * @param float $ownedUsers
         * @param array $mechanics
         * @param array $domains
         */
        public function __construct(

            int $id,
            string $name,
            int $year,
            int $minPlayer, 
            int $maxPlayer, 
            int $playTime, 
            int $minAge, 
            int $rateNum,
            float $rateAvg,
            int $BGGRank,
            float $complexity,
            float $ownedUsers,
            array $mechanics,
            array $domains

        ){
            $this->id = $id;
            $this->name = $name;
            $this->year = $year;
            $this->minPlayer = $minPlayer;
            $this->maxPlayer = $maxPlayer;
            $this->playTime = $playTime;
            $this->minAge = $minAge;
            $this->rateNum = $rateNum;
            $this->rateAvg = $rateAvg;
            $this->BGGRank = $BGGRank;
            $this->complexity = $complexity;
            $this->ownedUsers = $ownedUsers;
            $this->mechanics = $mechanics;
            $this->domains = $domains;

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
         * @return integer
         */
        public function getMinPlayer() : int {
            return $this->minPlayer;
        }

        /**
         * @return integer
         */
        public function getMaxPlayer() : int {
            return $this->maxPlayer;
        }

        /**
         * @return integer
         */
        public function getPlayTime() : int {
            return $this->playTime;
        }

        /**
         * @return integer
         */
        public function getMinAge() : int{
            return $this->minAge;
        }

        /**
         * @return integer
         */
        public function getRateNum() : int {
            return $this->rateNum;
        }

        /**
         * @return float
         */
        public function getRateAvg() : float{
            return $this->rateAvg;
        }

        /**
         * @return integer
         */
        public function getBGGRank() : int {
            return $this->BGGRank;
        }

        /**
         * @return float
         */
        public function getComplexity() : float{
            return $this->complexity;
        }

        /**
         * @return integer
         */
        public function getOwnedUsers() : int{
            return $this->ownedUsers;
        }

        /**
         * @return array
         */
        public function getMechanics() : array {
            return $this->mechanics;
        }

        /**
         * @return array
         */
        public function getDomains() : array {
            return $this->domains;
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
         * @param integer $minPlayer
         * @return void
         */
        public function setMinPlayer( int $minPlayer ) : void  {
            $this->minPlayer = $minPlayer  ;
        }
        
        /**
         * @param integer $maxPlayer
         * @return void
         */
        public function setMaxPlayer( int $maxPlayer ) : void  {
            $this->maxPlayer = $maxPlayer ;
        }
        
        /**
         * @param integer $playTime
         * @return void
         */
        public function setPlayTime( int $playTime ) : void  {
            $this->playTime = $playTime ;
        }
        
        /**
         * @param integer $minAge
         * @return void
         */
        public function setMinAge( int $minAge ) : void {
            $this->minAge = $minAge ;
        }
        
        /**
         * @param integer $rateNum
         * @return void
         */
        public function setRateNum( int $rateNum ) : void  {
            $this->rateNum = $rateNum ;
        }
        
        /**
         * @param float $rateAvg
         * @return void
         */
        public function setRateAvg( float $rateAvg ) : void {
            $this->rateAvg = $rateAvg ;
        }
        
        /**
         * @param integer $BGGRank
         * @return void
         */
        public function setBGGRank( int $BGGRank ) : void  {
            $this->BGGRank = $BGGRank ;
        }
        
        /**
         * @param float $complexity
         * @return void
         */
        public function setComplexity( float $complexity ) : void {
            $this->complexity = $complexity ;
        }
        
        /**
         * @param integer $ownedUsers
         * @return void
         */
        public function setOwnedUsers( int $ownedUsers ) : void {
            $this->ownedUsers = $ownedUsers ;
        }
        
        /**
         * @param array $mechanics
         * @return void
         */
        public function setMechanics( array $mechanics ) : void  {
            $this->mechanics = $mechanics ;
        }
        
        /**
         * @param array $domains
         * @return void
         */
        public function setDomains( array $domains ) : void  {
            $this->domains = $domains ;
        }

    }