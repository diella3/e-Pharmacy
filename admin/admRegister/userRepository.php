<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path = "./config/Database.php";
include($path);
$path = "users.php";
include($path);

class UserRepository{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    function insertUser($user){
        $db =  $this->db->pdo;

        $userid = $user->getUserId();
        $username = $user->getUsername();
        $firstname = $user->getFirstName();
        $lastname = $user->getLastName();
        $address = $user->getAddress();
        $zip = $user->getZip();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO users (userid,username,password,email,firstname,lastname,address,zip) VALUES (?,?,?,?,?,?,?,?)";

        $statement = $db->prepare($sql);
        $statement->execute([$userid,$username,$password,$email,$firstname,$lastname,$address,$zip,]);
    }

}
?>