<?php

class Customer {
    private int $id;
    private string $fName;
    private string $lName;
    private string $username;
    private string $email;
    private string $password;
    private string $picture;

    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }
    public function getFName(){
        return $this->fName;
    }
    public function setFName(string $fName){
        $this->fName = $fName;
    }
    public function getLName(){
        return $this->lName;
    }
    public function setLName(string $lName){
        $this->lName = $lName;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setUsername(string $username){
        $this->username = $username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword(string $password){
        $this->password = $password;
    }
    public function getPicture(){
        return $this->picture;
    }
    public function setPicture(string $picture){
        $this->picture = $picture;
    }

    public function validateCustomer(string $userPass) : bool {
        if(password_verify($userPass, $this->getPassword())) {
            return true;
        } else {
            return false;
        }
    }
}