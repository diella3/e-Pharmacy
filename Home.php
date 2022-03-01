<?php 
    require './controllers/ServicePharmacistController.php';
   

    $service_pharmacist = new ServicePharmacistController;
    $card_clients = new ServicePharmacistController;

    $services = $service_pharmacist->getServices();
    $clients = $card_clients->getClients();
    $static_content = $service_pharmacist->getStaticContent();

    $firstTwoServices = array();
    $secondTwoServices = array();
    $firstTwoClients = array();
  

    $i = 0;
    foreach( $services as $service) {
        if($i <=1) {
            array_push($firstTwoServices, $service);

        } 
        else if($i <= 2){
            array_push($secondTwoServices, $service);

        }
        $i++;
    }

    $k = 0;
    foreach($clients as $client){
        if($k >=0  && $k <3){
            array_push($firstTwoClients, $client);
        }  
        $k++;
            
    }
?>


<html>
<head>

    <title>Home</title>
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="icon" type="image/x-icon" href="./assets/pharmacyLogo.png">
    <style>
        <?php include "css/home.css" ?>   
        <?php include "css/general.css" ?>   
    </style>   
</head>

<body>
    <!-- Header-->
    <div class="container">
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
        <!-- Header-->

        <!-- Section -->
        <div class="section">
            <div class="description">
                <h3>Best Care & Better Health</h3>
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
            <div class="aboutImg">
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
                <a class="btn" href="aboutus.html">LEARN MORE</a>
            </div>
        </div>
        <!-- About Us-->

        <!-- Our services-->
        <div class="serviceContainer">
            <h3>Services</h3>
            <div class="services">
      
                <div class="service">
                <?php foreach($firstTwoServices as $service):?>
                    <div class="one">
                        <div class="icon">
                            <img src="./assets/servicesIcon.png">
                            <p>
                                <?php echo $service['title'];?>
                            </p>
                        </div>
                        <div class="text">
                            <p>
                                <?php echo $service['content'];?><br>
                            </p>
                        </div>
                    </div>
            
                    <?php endforeach ;?>
                </div>
               <div id="mainImg">
                    <img src="./assets/services.png">
                </div>
                <div class="service">
                <?php foreach($secondTwoServices as $service):?>
                    <div class="one">
                        <div class="icon">
                            <img src="./assets/servicesIcon.png">
                            <p>
                                <?php echo $service['title'];?>
                            </p>
                        </div>
                        <div class="text">
                            <p>
                                <?php echo $service['content'];?><br>
                            </p>
                        </div>
                    </div>
                    <?php endforeach ;?>
                </div> 
              
            </div>
          
            <a class="btn1" href="services.html">LEARN MORE</a>
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
                         <?php foreach($firstTwoClients as $client):?>
                        <div class="card">
                            <h4>Happy Clients</h4>
                            <p>
                            <?php echo $client['content'];?>
                            </p>
                            <div id="icon">         
                                <?php 
                                    echo "<img src='./assets/".$client['image']."' />"    
                                 ?>  
                                <div class="cardTxt">
                                    <p id="name">
                                        <?php echo $client['clientName'];?>
                                    </p>
                                    <p id="city">
                                    <?php echo $client['city'];?>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <?php endforeach ;?>  
               
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
        
    </div>
    <footer>
        <div class="container footer">
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
                <a href="aboutus.html">About Us</a>
                <a href="services.html">Services</a>
                <a href="login.html">LogIn</a>
                <a href="register.html">Register</a>
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
                </div>
        </footer>
        <script src="./js/header.js"></script>
</body>

</html>