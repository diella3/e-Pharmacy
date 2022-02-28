<?php
    require '../../controllers/AdmServiceController.php';
    $service = new AdmServiceController;

    if(isset($_POST['add'])) {

        $target = "../assets/".basename($_FILES['file']['name']);
        $image = $_FILES['file']['name'];

        move_uploaded_file($_FILES['file']['tmp_name'],$target);

        $service->addService($_POST, $image);
    }

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../css/admin.css">
        <link rel="icon" type="image/x-icon" href="../../assets/pharmacyLogo.png"> 
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

        <div class="add-service-section">
            <form id="add-form" action="" method="POST" enctype="multipart/form-data">
                <input class="title-input-as" type="text" value="" name="title" placeholder="Title"><br>
                <input class="content-input-as" type="text" value="" name="content" placeholder="Content"><br>  

                <div class="image-section">
                    <input class="form-control" type="file" name="file">
                </div> 

                <button class="submit-btn edit" type="submit" form="add-form" name="add">Add</button>                  
            </form>                   
        </div>
    </body>

</html>