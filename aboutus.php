<?php
require './controllers/admAboutusController.php';
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
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="./css/aboutus.css">
</head>

<body>
    <div class="mainDiv">
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
        <div class="theBanner">
        </div>
        <div class="aboutUs">
            <h3> About Our Pharmacy</h3>
        </div>
        <?php
        $foraboutus = new admAboutusController();
        $aboutusarray = array();

        $aboutus = $foraboutus->getAboutusById(1);
        array_push($aboutusarray, $aboutus);
        ?>

        <div class="contentOne">
            <div class="sectionOneDivOne">
                <?php
                echo "<img src='./assets/".$aboutus['image']."' />"
                ?>
            </div>
            <div class="sectionTwoDivOne">
                <h3> <?php echo $aboutus['title'];?></h3>
                <p><?php echo $aboutus['content'];?> </p>
            </div>
        </div>
        <?php
        $foraboutus = new admAboutusController();
        $aboutusarray = array();

        $aboutus = $foraboutus->getAboutusById(2);
        array_push($aboutusarray, $aboutus);
        ?>
        <div class="contentTwo">
            <div class="sectionOneDivTwo">
                <h3> <?php echo $aboutus['title'];?></h3>
                <p><?php echo $aboutus['content'];?> </p>
            </div>
            <div class="sectionTwoDivTwo">
                <?php echo "<img src='./assets/".$aboutus['image']."' />" ;?>
            </div>
        </div>
        <?php
        $foraboutus = new admAboutusController();
        $aboutusarray = array();

        $aboutus = $foraboutus->getAboutusById(3);
        array_push($aboutusarray, $aboutus);
        ?>
        <div class="contentThree">
            <div class="sectionOneDivThree">
                <?php echo "<img src='./assets/".$aboutus['image']."' />" ;?>
            </div>
            <div class="sectionTwoDivThree">
                <h3> <?php echo $aboutus['title'];?></h3>
                <p><?php echo $aboutus['content'];?> </p>
            </div>
        </div>
        <?php
        $foraboutus = new admAboutusController();
        $aboutusarray = array();

        $aboutus = $foraboutus->getAboutusById(4);
        array_push($aboutusarray, $aboutus);
        ?>
        <div class="contentFour">
            <div class="sectionOneDivFour">
                <h3> <?php echo $aboutus['title'];?></h3>
                <p><?php echo $aboutus['content'];?> </p>
            </div>
            <div class="sectionTwoDivFour">
                <?php echo "<img src='./assets/".$aboutus['image']."' />" ;?>
            </div>
        </div>

        <footer>
            <div class="first">
                <div id="footerLogo">
                    <img src="./assets/pharmacyLogo.png">
                    <h4>e-Pharmacy</h4>
                </div>
                <p> If you’re in need of medicines –<br>
                    we’re here by your side. Find the right <br>
                    care right when you need it and you will<br>
                    always get the response. <br>Stay safe and consulting online!</p>
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