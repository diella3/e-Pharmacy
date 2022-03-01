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
<html>
    <head>
        <title>Register Page</title>
        <script src="./js/register.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/register.css"/>

    </head>
    <body>
    <div class="containerRegister">
        <header class="header">
            <div class="logo">
                <img src="./assets/pharmacyLogo.png" />
                <h1>e-Pharmacy</h1>
            </div>
            <div class="navbar">
                <a href="home.php">Home</a>
                <a href="aboutus.php">About Us</a>
                <a href="services.php">Services</a>
                <?php

                if(isset($_SESSION['role']) && ($_SESSION['role']=='user')){
                    echo "<a id='logIn' href='login.php'>".$_SESSION['username'];"</a>";
                }else if(isset($_SESSION['role']) && ($_SESSION['role']=='admin')){
                    echo "<a id='logIn' href='login.php'>".$_SESSION['username'];"</a>";
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
        <div class="registerform">
            <?php
            $path = "./controllers/registerController.php";
            include_once($path);
            ?>
            <form class="user_data" name='registration' id="regform" action="register.php" method="post">
                <h1>Registration Form</h1>
                <p>Please enter your information to register.</p>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" size="16" /><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="passsword" size="25" /><br>
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" name="confirmpassword" id="confirmpassword" size="25" /><br>
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" id="firstname" size="50" /><br>
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="lastname" size="50" /><br>
                <label for="address">Full Address:</label>
                <input type="text" name="address" id="address" size="60" /><br>
                <label for="zip">ZIP Code:</label>
                <input type="text" name="zip" id="zip"/><br>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email"size="50" /><br>
                <input type="submit" name="submit" value="Submit" class="submitColumn" onclick="return validate()" />
                
            </form>
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
    </body>
</html>