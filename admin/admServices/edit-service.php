<?php
    require '../../controllers/AdmServiceController.php';
    $service = new AdmServiceController;

    if(isset($_GET['id'])) {
        $serviceId = $_GET['id'];
    }

    $currentService = $service->getServiceById($serviceId);

    if(isset($_POST['edit'])) {
        $target = "../assets/".basename($_FILES['file']['name']);
        $image = $_FILES['file']['name'];

        move_uploaded_file($_FILES['file']['tmp_name'],$target);

        $service->editService($serviceId, $_POST, $image);
    }

    if(isset($_POST['delete'])) {
        $service->deleteService($serviceId);
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

        <div class="edit-service-section">
            <form id="edit-form" action="" method="POST" enctype="multipart/form-data">
                <input class="title-input" type="text" value="<?php echo $currentService['title']; ?>" name="title"><br>
                <input class="content-input" type="text" value="<?php echo $currentService['content']; ?>" name="content"><br>     

                <div class="image-section">
                    <div class="currentPhotoSection">
                        <img src="../../assets/<?php echo $currentService['image'];?>" alt="" width="350" height="250">
                    </div>
                    <input class="form-control" type="file" name="file">
                </div>              
            </form>

            <form id="delete-form" action="" method="POST">
                                    
            </form>
            
            <div class="edit-delete-btns">
                <div class="flex1">
<<<<<<< HEAD
                    <button class="submit-btn edit" type="submit" form="edit-form" name="edit">Edit</button>
=======
                    <button class="submit-btn edit" type="submit" form="edit-form" name="edit">Save</button>
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
                </div>
             
                <div class="flex1">                
                    <button class="submit-btn delete" type="submit" form="delete-form" name="delete">Delete</button>
                </div>              
            </div>
            
        </div>
    </body>

</html>