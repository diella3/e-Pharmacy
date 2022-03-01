<?php
//$path = $_SERVER['DOCUMENT_ROOT'];
$path = "./admin/admRegister/userRepository.php";
include($path);

if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $zip = $_POST['zip'];
        $email = $_POST['email'];
        $id = rand(100, 999) . $username;

        $users = new Users($id, $username, $password, $email, $firstname, $lastname, $address, $zip);
        $userRepository = new UserRepository();
        $userRepository->insertUser($users);
        echo "<script>alert('User created!')</script>";

}

?>