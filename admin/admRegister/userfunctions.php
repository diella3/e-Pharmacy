<?php
//$path = $_SERVER['DOCUMENT_ROOT'];
$path = "../config/Database.php";
include($path);
$path = "users.php";
include($path);

class userfunctions{
    private $db;

    public function __construct(){
    $this->db = new Database;
    }

    function getAllUsers()
    {
        $db = $this->db->pdo;
        $sql = "SELECT * FROM users";
        $statement = $db->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }
}