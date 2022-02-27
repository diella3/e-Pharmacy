<?php

$path = "./admRegister/userfunctions.php";
include($path);
$id = $_GET['userid'];
$userfunctions = new userfunctions();

$userfunctions->deleteUserById($id);

header("location:dashboard.php");
?>