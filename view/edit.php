<?php
include_once '../repository/userRepository.php';

$userId = $_GET['id'];

$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);




?>


<form action="" method="POST">
        <input type="text" name="id" value="<?=$user['id']?>" readonly> <br><br>
        <input type="text" name="name" value="<?=$user['name']?>"> <br><br>
        <input type="text" name="surname" value="<?=$user['surname']?>"> <br><br>
        <input type="text" name="email" value="<?=$user['email']?>"> <br><br>
        <input type="text" name="username" value="<?=$user['username']?>"> <br><br>
        <input type="text" name="password" value="<?=$user['password']?>"> <br><br>
      

        <input type="submit" name="save" value="save"> <br><br>
</form>


<?php
if(isset($_POST['save'])){
    $id = $userId;
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userRepository->updateUser($id,$name,$surname,$email,$username,$password);
    header("location:dashboard.php");
}

?>