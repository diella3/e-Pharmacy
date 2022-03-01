<?php
$path = "../config/connection.php";
include($path);
session_start();
if ((isset($_SESSION['adminsuccsess'])== true) && ($_SESSION['role']=='admin')){
}
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

                <a href="users.php" class="link">
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

        <table class="users" id="members"   border="1">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>ZIP</th>
            </tr>
            <?php
            $path = "./admRegister/userfunctions.php";
            include_once($path);
            $userfunctions = new userfunctions();
            $users = $userfunctions ->getAllUsers();
            foreach($users as $user){
                echo
                "
                <br>
                <tr>
                    <th>$user[userid]</th>
                    <th>$user[username]</th>
                    <th>$user[password]</th>
                    <th>$user[email]</th>
                    <th>$user[firstname]</th>
                    <th>$user[lastname]</th>
                    <th>$user[address]</th>
                    <th>$user[zip]</th>
                  
                </tr>
                <br>
                ";
            }
            ?>
            
            </tr>
        </table>
    </body>

</html>