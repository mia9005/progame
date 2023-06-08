<?php


    class GameTest {

        public int $id;
        public string $name;
        public float $price;
        public string $img;
        public int $alt;

        public function __construct(
            int $id,
            string $name,
            float $price,
            string $img,
            int $alt,
        ){
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->img = $img;
            $this->alt = $alt;
        }

    }