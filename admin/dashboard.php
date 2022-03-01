<?php 
    require '../controllers/DashboardController.php';

    $dshb = new DashboardController;

    $pharmacistsCount = $dshb->getPharmacistCount();
    $servicesCount = $dshb->getServicesCount();
$path = "../config/connection.php";
include($path);
session_start();
if ((isset($_SESSION['adminsuccsess'])== true) && ($_SESSION['role']=='admin')){
}
?>

<html>
    <head>   
        <title>Administrator dashboard</title>
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
    </head>

    <body>
        <header class="header">
            <div class=left-area>
                <img src="../assets/pharmacyLogo.png" alt="Logo photo is added here">
                <h1>e-Pharmacy</h1>
            </div>

            <div class="right-area">
                <a href="../logout.php" class=" logout_btn">Logout</a>
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
                <a href="../Home.php" class="link">
                    <div class="navBtn">
                        Test
                    </div>
                </a>          
            </div>
        </div>

        <div class="content-wrapper">
            <div class="boxes">
                <div class="firstBox box">
                    Users registered
                </div>

                <div class="secondBox box">                  
                    Total Pharmacists: <?php echo $pharmacistsCount; ?>                      
                </div>
            </div>  
            
            <div class="boxes">
                <div class="thirdBox box">
                    Total Services: <?php echo $servicesCount; ?> 
                </div>

                <div class="fourthBox box">
                    Test
                </div>
            </div>
        </div>
    </body>
</html>