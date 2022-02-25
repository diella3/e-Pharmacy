<?php 
    require '../../controllers/AdmServiceController.php';
    $service = new AdmServiceController;
    $services = $service->getServices();
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../css/admin.css">
    </head>

    <body>

        <header class="header">

            <div class=left-area>
                <img src="../../assets/pharmacyLogo.png" alt="Logo photo is added here">
                <h1>e-Pharmacy</h1>
            </div>
        
            <div class="right-area">
                <a href="#" class=" logout_btn">Logout</a>
            </div>
        </header>
    
    
        <div class="sidebar">
            <div class="image">
                <img src="../../assets/adm.jpg" alt="adminicon is added here">
            </div>

            <div class="sidebarNavButtons"> 
                <a href="../dashboard.php" class="link">
                    <div class="navBtn">
                        Dashboard
                    </div>
                </a>             
                <a href="../users.php" class="link">
                    <div class="navBtn">
                        Users
                    </div>
                </a>  
                <a href="admin-services.php" class="link">
                    <div class="navBtn">
                        Services
                    </div>
                </a> 
                <a href="../admPharmacists/admin-pharmacists.php" class="link">
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

        <div class="services-list">
            <div class="services-list-label-and-add-btn">
                <div>
                    <h2>
                        Manage Services
                    </h2>
                </div>

                <div>
                    <a class="redirection-link" href="add-service.php">
                        <div class="add-new-btn">
                            Add New Service
                        </div>
                    </a>                  
                </div>
            </div>

            <div class="services-list-content">
                <?php foreach($services as $service):?>
                    <a class="redirection-link" href="./edit-service.php?id=<?php echo $service['id'];?>">
                        <div class="service-box">
                            <div class="service-title flex1">
                                <?php echo $service['title'];?>
                            </div>

                            <div class="service-description flex1">
                                <?php echo $service['content'];?>
                            </div>
                        </div>
                    </a>                 
                <?php endforeach ;?> 
            </div>         
        </div>
    </body>

</html>