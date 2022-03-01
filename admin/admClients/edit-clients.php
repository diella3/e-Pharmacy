<?php
    require '../../controllers/AdmClientController.php';
    $client = new AdmClientController;

    if(isset($_GET['id'])) {
        $clientId = $_GET['id'];
    }

    $currentClient = $client->getClientsById($clientId);

    if(isset($_POST['edit'])) {
        $target = "../../assets/".basename($_FILES['file']['name']);
        $image = $_FILES['file']['name'];

        move_uploaded_file($_FILES['file']['tmp_name'],$target);

        $client->editClients($clientId, $_POST, $image);
    }

    if(isset($_POST['delete'])) {
        $client->deleteClients($clientId);
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
                <a href="./admPharmacists/admin-pharmacists.php" class="link">
                    <div class="navBtn">
                        Pharmacists
                    </div>
                </a> 
                <a href="./admClients/admin-clients.php" class="link">
                    <div class="navBtn">
                        Clients
                    </div>
                </a>            
            </div>
        </div>

        <div class="edit-service-section">
            <form id="edit-form" action="" method="POST" enctype="multipart/form-data">
                <input class="title-input" type="text" value="<?php echo $currentClient['title']; ?>" name="title"><br>
                <input class="content-input" type="text" value="<?php echo $currentClient['content']; ?>" name="content"><br>
                <input class="content-input" type="text" value="<?php echo $currentClient['clientName']; ?>" name="clientName"><br>
                <input class="content-input" type="text" value="<?php echo $currentClient['city']; ?>" name="city"><br>          

                <div class="image-section">
                    <div class="currentPhotoSection">
                        <img src="../../assets/<?php echo $currentClient['image'];?>" alt="" width="350" height="250">
                    </div>
                    <input class="form-control" type="file" name="file">
                </div>              
            </form>

            <form id="delete-form" action="" method="POST">
                                    
            </form>
            
            <div class="edit-delete-btns">
                <div class="flex1">
                    <button class="submit-btn edit" type="submit" form="edit-form" name="edit">Edit</button>
                </div>
             
                <div class="flex1">
                    <button class="submit-btn delete" type="submit" form="delete-form" name="delete">Delete</button>
                </div>              
            </div>
            
        </div>
    </body>

</html>