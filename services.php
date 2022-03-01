<?php 
    require './controllers/ServicePharmacistController.php';

    $service_pharmacist = new ServicePharmacistController;

    $services = $service_pharmacist->getServices();
    $pharmacists = $service_pharmacist->getPharmacists();
    $static_content = $service_pharmacist->getStaticContent();

    $firstThreeServices = array();
    $secondThreeServices = array();
    $thirdThreeServices = array();

    $i = 0;
    foreach( $services as $service) {
        if($i <= 2) {
            array_push($firstThreeServices, $service);

        } else if($i <= 5){
            array_push($secondThreeServices, $service);

        }else if($i <= 9){
            array_push($thirdThreeServices, $service);
        }
        $i++;
    }
<<<<<<< HEAD

$path = "./config/connection.php";
include($path);
session_start();
if((isset($_SESSION['usersuccess'])== true) && ($_SESSION['role']=='user')){
}
if ((isset($_SESSION['adminsuccsess'])== true) && ($_SESSION['role']=='admin')){
}
=======
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
?>



<<<<<<< HEAD

=======
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
<html>
    <head>
<title>Services</title>

<link rel="stylesheet" type="text/css" href="./css/services.css">
<link rel="icon" type="image/x-icon" href="./assets/pharmacyLogo.png"> 
<<<<<<< HEAD
=======
<link rel="stylesheet" type="text/css" href="./css/general.css">
<link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3

    </head>

    <body>

<<<<<<< HEAD
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

        
=======
    <nav>
            <div class="logo">
                <img src="./assets/pharmacyLogo.png">
                <h1>e-Pharmacy</h1>
            </div>
            <div class="open-menu">
                <i class="fa fa-bars"></i>
            </div>
            <ul class="mainMenu">
                <li><a href="Home.php">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="login.html" id="logIn">Log In</a></li>
                <li><a href="register.html" id="register">Register</a></li>
                <div class="closeMenu"><i class="fa fa-times"></i></div>
            </ul>
        </nav>
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3

        <div class="slideshow-container">
            <div class="mySlides fade">
              <img src="./assets/photo 1.jpg">
            </div>
            <div class="mySlides fade">
              <img src="./assets/photo 2.jpg">
            </div>
          
            <div class="mySlides fade">
              <img src="./assets/photo 3.jpg">
            </div>
          </div>
<<<<<<< HEAD
          <br>

        <div class="servicestitle">
            <br>

        <h2 class="know"> e-Pharmacy services</h2>
=======

        <div class="servicestitle">

            <h2 class="know"> e-Pharmacy services</h2>
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3

        </div>

        <div class="boxes">
            <?php foreach($firstThreeServices as $service):?>
                <div class="box">
                    <div class="iconImage">
                        <?php 
                            echo "<img src='./assets/".$service['image']."' />"
                        ?>                
                    </div>

                    <div class="boxHeader">
                        <h4>
                            <?php echo $service['title'];?>
                        </h4>
                    </div>
        
                    <div class="boxContent">
                        <p>
                            <?php echo $service['content'];?>
                        </p>          
                    </div>
                </div>
            <?php endforeach ;?>
        </div>
    

        <div class="services">
            <?php foreach($secondThreeServices as $service):?>

                <div class="service1">

                    <?php if($service['id'] % 2 === 0): ?>
                        <div class="image">
                            <img src="./assets/<?php echo $service['image'];?>" alt="covid -19 photo is added here" height="370" width="100%">
                        </div>
            
                        <div class="desc">
<<<<<<< HEAD
                            <div class="descContent">
=======
                            <div>
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
                                <h4 class="headerSpan">
                                    <?php echo $service['title'];?>
                                </h4>
                            </div>
<<<<<<< HEAD
                            <div>
=======
                            <div class="descContent">
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
                                <p>
                                    <?php echo $service['content'];?> 
                                </p>
                            </div>
                        </div>  

                    <?php else: ?>     
                        <div class="desc">
<<<<<<< HEAD
                            <div class="descContent">
=======
                            <div>
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
                                <h4 class="headerSpan">
                                    <?php echo $service['title'];?>
                                </h4>
                            </div>
<<<<<<< HEAD
                            <div>
=======
                            <div class="descContent">
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
                                <p>
                                    <?php echo $service['content'];?> 
                                </p>
                            </div>
                        </div> 

                        <div class="image">
                            <img src="./assets/<?php echo $service['image'];?>" alt="covid -19 photo is added here" height="370" width="100%">
                        </div>
                    <?php endif; ?> 

                </div>

            <?php endforeach ;?>
        </div> 

        <div class="boxes">
            <?php foreach($thirdThreeServices as $service):?>
                <div class="box">
                    <div class="iconImage">
                        <?php 
                            echo "<img src='./assets/".$service['image']."' />"
                        ?>                
                    </div>

                    <div class="boxHeader">
                        <h4>
                            <?php echo $service['title'];?>
                        </h4>
                    </div>
        
                    <div class="boxContent">
                        <p>
                            <?php echo $service['content'];?>
                        </p>          
                    </div>
                </div>
            <?php endforeach ;?>           
        </div> 

        <div class="farmacists">
            <?php foreach($static_content as $stc):?>
                <h2 class="know">
                    <?php echo $stc['title'];?>
                </h2>

                <p>
                    <?php echo $stc['content'];?>
                </p>
            <?php endforeach ;?>    
        </div>

        <div class="farmacistsContent">

            <?php foreach($pharmacists as $phrmacist):?>
                <div class="content">  
                    <div class="contentImg">            
                        <?php 
                            echo "<img src='./assets/".$phrmacist['image']."' />"
                        ?> 
                    </div>

                    <div class="contentText">
                        <h3> <?php echo $phrmacist['full_name'];?> </h3>
                        <p>
                            <?php echo $phrmacist['description'];?>
                        </p>
                    </div>    
                </div> 
            <?php endforeach ;?>
        </div>
    
        <footer>
<<<<<<< HEAD
=======
        <div class="container footer">
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
            <div class="first">
                <div id="footerLogo">
                    <img src="./assets/pharmacyLogo.png">
                    <h4>e-Pharmacy</h4>
                </div>
<<<<<<< HEAD
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
=======
                <p>If you’re in need of medicines –<br>
                    we’re here by your side. Find the right <br>
                    care right when you need it and you will<br>
                    always get the response. <br>Stay safe and buy online!</p>
            </div>
            <div class="second">
                <h4>Useful Links</h4>
                <a href="aboutus.html">About Us</a>
                <a href="services.html">Services</a>
                <a href="login.html">LogIn</a>
                <a href="register.html">Register</a>
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
            </div>
            <div class="third">
                <h4>Contacts </h4>
                <div class="contact">
<<<<<<< HEAD

=======
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
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
<<<<<<< HEAD
        </footer>
=======
                </div>
        </footer>
<script src="./js/header.js"></script>
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
<script src="./js/slider.js"></script>
    </body>
</html>