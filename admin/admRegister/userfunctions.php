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

    function getUserByUsernameAndPassword($username, $password)
    {

    }

    function getUserById($userid)
    {
        $conn = $this->db->pdo;

        $sql = "SELECT * FROM user WHERE id='$userid'";
        $statement = $conn->query($sql);
        return $statement->fetch();
    }


    function updateUser($username, $password, $email, $firstname, $lastname, $address, $zip)
    {
        $conn = $this->db->pdo;

        $sql = "UPDATE user SET password=?,email=?,firstname=?,lastname=?,address=?,zip=?,password=? where userId=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$username, $password, $email, $firstname, $lastname, $address, $zip]);
        echo "<script> alert('User has been updated successfully!') </script>";
    }

    function deleteUserById($userId)
    {
        $conn = $this->db->pdo;

        $sql = "DELETE FROM user WHERE username=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$userId]);
        echo "<script> alert('User has been deleted successfully!') </script>";
    }
}