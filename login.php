<?php
$path = "./config/connection.php";
include($path);
session_start();
if((isset($_SESSION['usersuccess'])== true) && ($_SESSION['role']=='user')){
}
if ((isset($_SESSION['adminsuccsess'])== true) && ($_SESSION['role']=='admin')){
}
?>
<!DOCTYPE html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/login.css"/>
</head>
<body>
<div class="containerLogin">
<header class="header">
    <div class="logo">
        <img src="./assets/pharmacyLogo.png" />
        <h1>e-Pharmacy</h1>
    </div>
    <div class="navbar">
        <a href="Home.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="services.php">Services</a>
        <?php
        if(isset($_SESSION['role']) && ($_SESSION['role']=='user')){
            echo "<a id='logIn' href='#'>".$_SESSION['username'];"</a>";
        }else if(isset($_SESSION['role']) && ($_SESSION['role']=='admin')){
            echo "<a id='logIn' href='#'>".$_SESSION['username'];"</a>";
        }
        else{
            echo "<a id='logIn' href='login.php'>Login</a>";
        }?>
        <?php
        if(isset($_SESSION['role']) && ($_SESSION['role']=='user')){
            echo "<a id='register' href='logout.php'>Logout</a>";
        }else if(isset($_SESSION['role']) && ($_SESSION['role']=='admin')){
            echo "<a id='register' href='logout.php'>Logout</a>";
        }else{
            echo "<a id='register' href='register.php'>Register</a>";
        }?>
    </div>
</header>
<div class="mainDiv">

    <div class="form">
        <h2>Welcome back to your online pharmacy!</h2>
        <form class="loginForm" method="post">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username"/><br>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password"/><br>
            <select name="role" id="select">
                <option name="admin" value="admin">Admin</option>
                <option name="user" value="user">User</option>
            </select>
            <input type="submit"  name="submit" value="Login" id="submit"/>
            <p>Not a member? Consider <a href="register.php">Registering here:</a> </p>
        </form>
    </div>

</div>
<footer>
    <div class="first">
        <div id="footerLogo">
            <img src="./assets/pharmacyLogo.png">
            <h4>e-Pharmacy</h4>
        </div>
        <p>If you’re in need of medicines –<br>
            we’re here by your side. Find the right <br>
            care right when you need it and you will<br>
            always get the response. <br>Stay safe and buy online!</p>
    </div>
    <div class="second">
        <h4>Useful Links</h4>
        <a href="aboutus.php">About Us</a>
        <a href="services.php">Services</a>
        <a href="login.php">LogIn</a>
        <a href="register.php">Register</a>
    </div>
    <div class="third">
        <h4>Contacts </h4>
        <div class="contact">
            <img src="./assets/location.png">
            <p>Rr.Agim Ramadani ,10000 - Prishtine, Kosove</p>
        </div>
        <div class="contact">
            <img src="./assets/phone-call.png">
            <p>+383 49 123 456</p>
        </div>
        <div class="contact">
            <img src="./assets/email.png">
            <p>e-Pharmacy@gmail.com</p>
        </div>
    </div>
    <div class="fourth">
        <img src="./assets/facebook.png">
        <img src="./assets/instagram.png">
        <img src="./assets/linkedin.png">
    </div>
</footer>
</div>
<script src="./js/login.js"></script>
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path = "./controllers/loginController.php";
include_once($path);
?>
</body>
</html>
