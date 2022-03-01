<?php
$path = "./config/connection.php";
include($path);
session_start();
if((isset($_SESSION['usersuccess'])== true) && ($_SESSION['role']=='user')){
}
if ((isset($_SESSION['adminsuccsess'])== true) && ($_SESSION['role']=='admin')){
}
?>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <!-- Header-->
    <div class="container">
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
        <!-- Header-->

        <!-- Section -->
        <div class="section">
            <div class="description">
                <h3>Best Care & <br> Better Health</h3>
                <p>E-Pharmacy is an official supplier of the medical products. We work<br>
                    together with the international pharmaceutical companies that<br>
                    supply licensed medications all over the world. We have achieved<br>
                    the wholesale prices for medications by means of the direct<br>
                    collaboration with manufacturers.</p>
            </div>
            <div class="imgSection">
                <img src="./assets/sectionImg.png" />
            </div>
        </div>
        <!-- Section -->

        <!-- About Us-->
        <div class="about">
            <div>
                <img src="./assets/about.png" />
            </div>
            <div class="txtAbout">
                <!-- <div class="aboutText"> -->
                <h3>About Us</h3>
                <p id="txt">Find the right care right when you need it. Start by choosing your reason<br>
                    for visit, and we'll help you find the right care.Through our work we help<br>
                    to promote professionalism,support continuous improvement and assure <br>
                    the quality and safety of pharmacy.</p>
                <!-- </div> -->


                <div class="listContainer">
                    <div class="lists">
                        <div id="list">
                            <img src="./assets/round.png">
                            <p>Shop directly and save</p>
                        </div>
                        <div id="list">
                            <img src="./assets/round.png">
                            <p>Free or discounted shipping</p>
                        </div>
                        <div id="list">
                            <img src="./assets/round.png">
                            <p>24 hour/7 day customer service</p>
                        </div>
                    </div>

                    <div class="lists">
                        <div id="list">
                            <img src="./assets/round.png">
                            <p>A greener way to shop</p>
                        </div>
                        <div id="list">
                            <img src="./assets/round.png">
                            <p>Assurance of expiration dates</p>
                        </div>
                        <div id="list">
                            <img src="./assets/round.png">
                            <p>Shop directly and save</p>
                        </div>
                    </div>
                </div>
                <a class="btn" href="aboutus.php">LEARN MORE</a>
            </div>
        </div>
        <!-- About Us-->

        <!-- Our services-->
        <div class="serviceContainer">
            <h3>Services</h3>
            <div class="services">
                <div class="service">
                    <div class="one">
                        <div class="icon">
                            <img src="./assets/servicesIcon.png">
                            <p>Disposal and review of medicals</p>
                        </div>
                        <div class="text">
                            <p>Besides selling the medicines, our pharmacy<br>
                                provides the service of disposal of medicals.<br>
                                 </p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="icon">
                            <img src="./assets/servicesIcon.png">
                            <p>
                                Covid - 19 Instructions </p>
                        </div>
                        <div class="text">
                            <p>Contact us at any time to take <br>
                                the necessary measures at the right time.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="./assets/services.png">
                </div>
                <div class="service">
                    <div class="one">
                        <div class="icon">
                            <img src="./assets/servicesIcon.png">
                            <p>
                                Health education</p>
                        </div>
                        <div class="text">
                            <p> Health education teaches about physical,  <br>
                                mental, emotional and social health.</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="icon">
                            <img src="./assets/servicesIcon.png">
                            <p>
                                Consultations and instructions </p>
                        </div>
                        <div class="text">
                            <p>We may provide you  the  perfect place <br>
                                for consulting and instructions. </p>
                        </div>
                    </div>
                </div>
              
            </div>
            <a class="btn1" href="services.php">LEARN MORE</a>
        </div>
        <!-- Our services-->

        <!-- Happy Clients-->
        <div class="clientsContainer">

            <div class="clientSection">
                <h3>Reasons to Love  e-Pharmacy</h3>
                <div class="clients">
                    <div class="client">
                        <img src="./assets/chat.jpg">
                        <p>Find Care Now</p>
                    </div>
                    <div class="client">
                        <img src="./assets/chat2.jpg">
                        <p>Chat With a Pharmacy Expert</p>
                    </div>
                    <div class="client">
                        <img src="./assets/chat3.jpg">
                        <p>Schedule your Vaccine</p>
                    </div>
                </div>
                <div class="comentsSection">
                    <P id="title">What People Say About Us</P>
                    <div class="cards">
                        <div class="card">
                            <h4>Happy Clients</h4>
                            <p>As a mom, i don't have much time and the<br>
                                opportunity to go outside at times when my kids are <br>
                                sick.Online pharmacy is the best soultion.</p>
                            <div id="icon">
                                <img src="./assets/client4.jpg">
                                <div class="cardTxt">
                                    <p id="name">Sandy Cooper</p>
                                    <p id="city">New York</p>
                                </div>

                            </div>
                        </div>
                        <div class="card">
                            <h4>Happy Clients</h4>
                            <p>Online pharmacy is a helpful hand when I don’t feel<br>
                                like getting out or some medicines or cosmetics are<br>
                                out of stock in my town.</p>
                            <div id="icon">
                                <img src="./assets/client5.jpg">
                                <div class="cardTxt">
                                    <p id="name">Linda Patison</p>
                                    <p id="city">New York</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Happy Clients-->

        <!-- last information-->
        <div class="infoContainer">
            <div class="info">
                <div class="infoImg">
                    <img src="./assets/shopping-cart.png">
                    <p>Shop online </p>
                </div>
                <p>Choose a nearby store to see what's available.</p>
            </div>
            <div class="info">
                <div class="infoImg">
                    <img src="./assets/free-shipping.png">
                    <p>Free Consulting</p>
                </div>
                <p>Don’t worry! We will be always here to help you .</p>
            </div>
            <div class="info">
                <div class="infoImg">
                    <img src="./assets/return (1).png">
                    <p>Free Returns</p>
                </div>
                <p>All returns are subject to verification of original sale.</p>
            </div>
            <div class="info">
                <div class="infoImg">
                    <img src="./assets/gift-card.png">
                    <p>Gift Cards</p>
                </div>
                <p>The perfect gift for everyone, it is a gift card.</p>
            </div>
        </div>
        <!-- last information-->
        <!--Footer-->
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