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
        echo "<script> alert('User has been inserted successfuly!') </script>";
    }

    /*function getAllUsers(){
        $db =  $this->db->pdo;
        $sql = "SELECT * FROM users";
        $statement = $db->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserByUsernameAndPassword($username,$password){

    }

    function getUserById($id){
        $conn = $this->db;

        $sql = "SELECT * FROM user WHERE id='$id'";
        $statement=$conn->pdo->query($sql);
        return $statement->fetch();
    }


    function updateUser($username,$password,$email,$firstname,$lastname,$address,$zip){
        $conn = $this->db;

        $sql = "UPDATE user SET password=?,email=?,firstname=?,lastname=?,address=?,zip=?,password=? where userId=?";

        $statement = $conn->pdo->prepare($sql);

        $statement->execute([$username,$password,$email,$firstname,$lastname,$address,$zip]);
        echo "<script> alert('User has been updated successfully!') </script>";
    }

    function deleteUserById($userId)
    {
        $conn = $this->db;

        $sql = "DELETE FROM user WHERE username=?";

        $statement = $conn->pdo->prepare($sql);
        $statement->execute([$userId]);
        echo "<script> alert('User has been deleted successfully!') </script>";
    }*/
}
?>