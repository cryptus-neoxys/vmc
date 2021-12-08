<?php
include("includes/database.php");
include("session.php"); ?>
<!DOCTYPE html>

<!-- 
  Dev Sharma
  19BCE0171
  07 Dec 2021
 -->

<html>

<head>
  <title>Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link rel="icon" href="../images/vmc.jpg" type="image/x-icon">
  <link rel="stylesheet" href="./css/scrollbar.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/home.css">
</head>

<body>
  <div class="button-types">
    <button class="vmc" style="text-decoration: none; background-color: #e0a90f;padding: 10px 40px;"><a href="index.php">VMC</a></button>
    <button class="unresolved"><a href="home.php">Unresolved</a></button>
    <?php if ($_SESSION['role'] == 'admin') {
      echo '<button class="resolved"><a href="home.php?q=resolved">Resolved</a></button>';
    }
    ?>
    <button class="me" style="text-decoration: none; background-color: #17b4df;padding: 10px 40px;"><a href="me.php">Dashboard</a></button>
    <button class="signout" style="text-decoration: none; background-color: #e6807d;padding: 10px 40px;"><a href="signout.php">Sign Out</a></button>
  </div>
  <h1 style="text-align: center; color: gray;">User Dashboard</h1>
  <div class="complaints_container">

    <?php

    $result = mysqli_query($con, "SELECT * FROM user WHERE id = '$_SESSION[id]'");
    $admin = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    if ($count == 0) {
    } else if ($count > 0) {
      $fullname = $admin['fullname'];
      $username = $admin['username'];
      $ward = $admin['ward'];
    }

    $query = mysqli_query($con, "SELECT * from complaint join user on complaint.user_id = user.id WHERE (complaint.user_id = '$_SESSION[id]') order by complaint.id DESC");
    if (mysqli_num_rows($query) == 0) {
    }
    while ($row = mySQLi_fetch_array($query)) {
      $id = $row['id'];
      $name = $row['fullname'];
      $aadhar = $row['aadhar'];
      $gender = $row['gender'];
      $type = $row['type'];
      $body = $row['body'];
      $action = $row['action'];
      $resolved = $row['resolved'];
    ?>

      <form class="complaint_form" align="center">
        <div class="side-by-side">
          <p class="name">Name: <?php echo $name ?></p>
          <p class="aadhar">Aadhar: <?php echo $aadhar ?></p>
        </div>
        <div class="side-by-side">
          <p class="gender">Gender: <?php echo $gender ?></p>
          <p class="type">Type of Complaint: <?php echo $type ?></p>
        </div>
        <p class="body">Complaint Description: <?php echo $body ?></p>
        <p>Action: <?php echo $action ?></p>
        <p>Complaint status: <?php if ($resolved == 1) echo "Resolved";
                              else echo "Unresolved" ?></p>
        <hr>
      </form>
    <?php
    }
    ?>