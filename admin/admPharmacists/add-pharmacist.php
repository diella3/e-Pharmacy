<?php
    require '../../controllers/AdmPharmacistController.php';
    $pharmacist = new AdmPharmacistController;

    if(isset($_POST['add'])) {

        $target = "../assets/".basename($_FILES['file']['name']);
        $image = $_FILES['file']['name'];

        move_uploaded_file($_FILES['file']['tmp_name'],$target);

        $pharmacist->addPharmacist($_POST, $image);
    }

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
                <a href="./admin-pharmacists.php" class="link">
                    <div class="navBtn">
                        Pharmacists
                    </div>
                </a> 
                <a a href="../admClients/admin-clients.php" class="link">
                    <div class="navBtn">
                        Clients
                    </div>
                </a>         
            </div>
        </div>

        <div class="add-pharmacist-section">
            <form id="add-form" action="" method="POST" enctype="multipart/form-data">
                <input class="title-input" type="text" value="" name="full_name" placeholder="Full Name"><br>
                <input class="content-input" type="text" value="" name="description" placeholder="Description"><br>  

                <div class="image-section">
                    <input class="form-control" type="file" name="file">
                </div> 

                <button class="submit-btn edit" type="submit" form="add-form" name="add">Add</button>                  
            </form>                   
        </div>
    </body>

</html>