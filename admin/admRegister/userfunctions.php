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

    function getUserById($userid)
    {
        $conn = $this->db->pdo;

        $sql = "SELECT userid,username,password,email,firstname,lastname,address,zip FROM users WHERE id=?";
        $statement=$conn->prepare($sql);
        $user = $statement->execute([$userid]);

        return $user->fetch(PDO::FETCH_ASSOC);
    }


    function updateUser($username, $password, $email, $firstname, $lastname, $address, $zip)
    {
        $conn = $this->db->pdo;

        $sql = "UPDATE userS SET password=?,email=?,firstname=?,lastname=?,address=?,zip=?,password=? where userId=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$username, $password, $email, $firstname, $lastname, $address, $zip]);
        echo "<script> alert('User has been updated successfully!') </script>";
    }

    function deleteUserById($userId)
    {
        $conn = $this->db->pdo;

        $sql = "DELETE FROM userS WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$userId]);
        echo "<script> alert('User has been deleted successfully!') </script>";
    }
}