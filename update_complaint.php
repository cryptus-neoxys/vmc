<?php
include('includes/database.php');


$id = $_POST["id"];
$resolved = $_POST["resolved"];
$action = $_POST["action"];
$update = mysqli_query($con, "UPDATE complaint SET resolved =  $resolved, action = '$action' WHERE id=$id");
header('location:home.php');
