<?php 

class Users{
    private $userId;
    private $username;
    private $password;
    private $email;
    private $firstname;
    private $lastname;
    private $address;
    private $zip;

    function __construct($userId,$username,$password,$email,$firstname,$lastname,$address,$zip){
        $this->userId = $userId;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->address = $address;
        $this->zip = $zip;
    }
    function __construct1($username,$password){
        $this->username = $username;
        $this->password = $password;
    }
    function getUserId(){
        return $this->userId;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
    function getEmail(){
        return $this->email;
    }
    function getFirstName(){
        return $this->firstname;
    }
    function getLastName(){
        return $this->lastname;
    }
    function getAddress(){
        return $this->address;
    }
    function getZip(){
        return $this->zip;
    }

}


?>