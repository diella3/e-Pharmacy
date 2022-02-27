<?php 
    require '../../controllers/AdmClientController.php';
    $client = new AdmClientController;
    $clients = $client->getClients();
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
                <a href="../admServices/admin-services.php" class="link">
                    <div class="navBtn">
                        Services
                    </div>
                </a> 
                <a href="../admPharmacists/admin-pharmacists.php" class="link">
                    <div class="navBtn">
                        Pharmacists
                    </div>
                </a> 
                <a href="admin-clients.php" class="link">
                    <div class="navBtn">
                        Clients
                    </div>
                </a>            
            </div>
        </div>

        <div class="pharmacists-list">
            <div class="pharmacists-list-label-and-add-btn">
                <div>
                    <h2>
                        Manage Clients
                    </h2>
                </div>

                <div>
                    <a class="redirection-link" href="add-clients.php">
                        <div class="add-new-btn">
                            Add New Client
                        </div>
                    </a>                  
                </div>
            </div>

            <div class="services-list-content">
                <?php foreach($clients as $client):?>
                    <a class="redirection-link" href="edit-clients.php?id=<?php echo $clients['id'];?>">
                        <div class="pharmacist-box">
                            <div class="pharmacist-title flex1">
                                <?php echo $clients['clientName'];?>
                            </div>

                            <div class="pharmacist-description flex1">
                                <?php echo $clients['content'];?>
                            </div>
                        </div>
                    </a>                 
                <?php endforeach ;?> 
            </div>         
        </div>
    </body>

</html>