
<!DOCTYPE html>
<html>
    <head>
        <title>Register Page</title>
        <script src="./js/register.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/register.css"/>

    </head>
    <body>
        <header class="header">
            <div class="logo">
                <img src="./assets/pharmacyLogo.png" />
                <h1>e-Pharmacy</h1>
            </div>
            <div class="navbar">
                <a href="Home.html">Home</a>
                <a href="aboutus.html">About Us</a>
                <a href="services.php">Services</a>
                <a id="logIn" href="login.html">LogIn</a>
                <a id="register" href="register.php">Register</a>
        
            
            </div>
        </header>        
        <div class="registerform">
            <div id="error"></div>
            <form class="user_data" name='registration' id="regform" action="register.php" method="post">
                <h1>Registration Form</h1>
                <p>Please enter your information to register.</p>
                <label for="username">Username:</label>
                <input type="text" name="username" size="16" /><br>
                <label for="password">Password:</label>
                <input type="password" name="password" size="25" /><br>
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" name="confirmpassword" size="25" /><br>
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" size="50" /><br>
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" size="50" /><br>
                <label for="address">Full Address:</label>
                <input type="text" name="address" size="60" /><br>
                <label for="zip">ZIP Code:</label>
                <input type="text" name="zip" /><br>
                <label for="email">Email:</label>
                <input type="text" name="email" size="50" /><br>
                <label id="gender">Gender:</label><br>
                <div class="genderRow">
                    <input type="radio" name="mgender" value="Male" />Male
                    <input type="radio" name="fgender" value="Female" />Female
                    <input type="radio" name="ogender" value="None" />Prefer not to say
                </div>
                <input type="submit" name="submitBtn" value="Submit" class="submitColumn" onclick="validate()" />
                
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
        </footer>
        <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path = "./controllers/registerController.php";
        include_once($path);
        /*if((isset($_SESSION['loggedinsucsesfull']) && $_SESSION['loggedinsucsesfull'] == true)
            && ($_SESSION['rol']=='admin')){
            header("");
        }*/
        ?>

    </body>
</html>