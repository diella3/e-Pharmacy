<?php
$path = $_SERVER['DOCUMENT_ROOT'];
//$path = "./admin/admRegister/userRepository.php";
//include($path);
$path = "./config/Database.php";
include_once($path);


if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $_SESSION['role'] = $role;
        $_SESSION['username'] = $username;
        $selectOption = $_POST['role'];
        $db = new Database();
        $db = $db->pdo;

        $sql = "SELECT username,password,role FROM users WHERE username=? and password=? and role=?";
        $result = $db->prepare($sql);
        $result->execute([$username,$password,$role]);
        //$statement = $db->query($sql);

        // Mysql_num_row is counting table row
        $count = $result->rowCount();
        $row = $result->fetch();

        if ($count == 1) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['role']= $row['role'];

            //$auth = $row['role'];
            if ($row['role'] == 'admin') {
                $_SESSION['adminsuccsess'] = true;
                header('Location: ./admin/dashboard.php');
            } else {
                $_SESSION['usersuccess'] = true;
                header('Location: ./Home.php');
            }

        } else {
            echo "<script> alert('Check your name and password') </script>";


        }
    }
}

