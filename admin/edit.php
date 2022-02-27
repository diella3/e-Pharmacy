<?php
//$path = $_SERVER['DOCUMENT_ROOT'];
$path = "./admRegister/userfunctions.php";
include_once($path);

$userId = $_GET['userid'];

$userfunctions = new userfunctions();

$user = $userfunctions->getUserById($userId);

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>

<body>

<header class="header">

    <div class=left-area>
        <img src="../assets/pharmacyLogo.png" alt="Logo photo is added here">
        <h1>e-Pharmacy</h1>
    </div>

    <div class="right-area">
        <a href="#" class=" logout_btn">Logout</a>
    </div>
</header>


<div class="sidebar">
    <div class="image">
        <img src="../assets/adm.jpg" alt="adminicon is added here">
    </div>

    <div class="sidebarNavButtons">
        <a href="dashboard.php" class="link">
            <div class="navBtn">
                Dashboard
            </div>
        </a>

        <a href="admRegister/users.php" class="link">
            <div class="navBtn">
                Users
            </div>
        </a>
        <a href="./admServices/admin-services.php" class="link">
            <div class="navBtn">
                Services
            </div>
        </a>
        <a href="./admPharmacists/admin-pharmacists.php" class="link">
            <div class="navBtn">
                Pharmacists
            </div>
        </a>
        <a href="user.php" class="link">
            <div class="navBtn">
                Test
            </div>
        </a>
    </div>

</div>

<table id="members">
    <form action="" method="POST">

        <input type="text" name="username" value="<?=$user['username']?>"> <br><br>
        <input type="text" name="password" value="<?=$user['password']?>"> <br><br>
        <input type="text" name="email" value="<?=$user['email']?>"> <br><br>
        <input type="text" name="firstname" value="<?=$user['firstname']?>"> <br><br>
        <input type="text" name="lastname" value="<?=$user['lastname']?>"> <br><br>
        <input type="text" name="lastname" value="<?=$user['address']?>"> <br><br>
        <input type="text" name="lastname" value="<?=$user['zip']?>"> <br><br>


        <input type="submit" name="save" value="save"> <br><br>
    </form>
    </tr>
</table>

</body>

</html>


<?php
if(isset($_POST['save'])){
    $userid = $_POST['userid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $userfunctions->updateUser($username,$password,$email,$firstname,$lastname,$address,$zip);
    header("location:dashboard.php");
}

?>