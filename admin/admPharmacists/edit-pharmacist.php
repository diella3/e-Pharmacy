<?php
    require '../../controllers/AdmPharmacistController.php';
    $pharmacist = new AdmPharmacistController;

    if(isset($_GET['id'])) {
        $pharmacistId = $_GET['id'];
    }

    $currentPharmacist = $pharmacist->getPharmacistById($pharmacistId);

    if(isset($_POST['edit'])) {
        $target = "../../assets/".basename($_FILES['file']['name']);
        $image = $_FILES['file']['name'];

        move_uploaded_file($_FILES['file']['tmp_name'],$target);

        $pharmacist->editPharmacist($pharmacistId, $_POST, $image);
    }

    if(isset($_POST['delete'])) {
        $pharmacist->deletePharmacist($pharmacistId);
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
                <a href="../admServices/admin-services.php" class="link">
                    <div class="navBtn">
                        Services
                    </div>
                </a> 
<<<<<<< HEAD
                <a href="./admPharmacists/admin-pharmacists.php" class="link">
=======
                <a href="./admin-pharmacists.php" class="link">
>>>>>>> 07a4a4f5fabd9d9b73b4d441b605cd163a1911f3
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
                <input class="title-input" type="text" value="<?php echo $currentPharmacist['full_name']; ?>" name="full_name"><br>
                <input class="content-input" type="text" value="<?php echo $currentPharmacist['description']; ?>" name="description"><br>     

                <div class="image-section">
                    <div class="currentPhotoSection">
                        <img src="../../assets/<?php echo $currentPharmacist['image'];?>" alt="" width="350" height="250">
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