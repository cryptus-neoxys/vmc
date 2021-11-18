<!DOCTYPE html>
<!-- 
  12th August 2021 and 19th August 2021
  19BCE0151
  Ohm Patel
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
        <button class="unresolved"><a href="home.php">Unresolved</a></button>
        <button class="resolved"><a href="home.php?q=resolved">Resolved</a></button>
        <button class="signout" style="text-decoration: none; background-color: #e6807d;padding: 10px 40px;"><a href="signout.php">Sign Out</a></button>
    </div>
    <h1 style="text-align: center; color: gray;">Admin Portal</h1>
    <div class="complaints_container">
        <!-- <form class="complaint_form" align="center" method="post" action="update_complaint.php">
            <div class="side-by-side">
                <p class="name">Name: Ohm</p>
                <p class="aadhar">Aadhar: 239482193412</p>
            </div>
            <div class="side-by-side">
                <p class="gender">Gender: M</p>
                <p class="type">Type of Complaint: Sanitation</p>
            </div>
            <p class="body">Complaint Description: CONTENT HERE</p>
            <p>Action</p>
            <textarea name="action"></textarea>
            <p>Complaint resolved?</p>
            <input type="checkbox" id="html" name="resolved" value="HTML">
              <label for="html">Resolved</label><br>
            <input name="id" class="invisible" value="3" type="text">
            <button class="update-complaint-button" type="submit" name="submit">Update Complaint</button>
        </form> -->

        <?php
        include("includes/database.php");
        include("session.php");
        $q = 0;
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        if (count($queries) > 0 && ($queries["q"] == 1 || $queries["q"] == "resolved")) {
            // echo $queries["q"];
            $q = 1;
            // echo $resolved;
        }
        $query = mySQLi_query($con, "SELECT * from complaint WHERE resolved = $q order by id DESC");
        while ($row = mySQLi_fetch_array($query)) {
            $id = $row['id'];
            $name = $row['name'];
            $aadhar = $row['aadhar'];
            $gender = $row['gender'];
            $type = $row['type'];
            $body = $row['body'];
            $action = $row['action'];
            $resolved = $row['resolved'];
        ?>

            <form class="complaint_form" align="center" method="post" action="update_complaint.php">
                <div class="side-by-side">
                    <p class="name">Name: <?php echo $name ?></p>
                    <p class="aadhar">Aadhar: <?php echo $aadhar ?></p>
                </div>
                <div class="side-by-side">
                    <p class="gender">Gender: <?php echo $gender ?></p>
                    <p class="type">Type of Complaint: <?php echo $type ?></p>
                </div>
                <p class="body">Complaint Description: <?php echo $body ?></p>
                <p>Action</p>
                <textarea class="action" name="action"><?php echo $action ?></textarea>
                <p>Complaint resolved?</p>
                <input type="checkbox" id="resolved" name="resolved" <?php if ($resolved == 1) echo "checked" ?>>
                  <label for="html">Resolved</label><br>
                <input name="id" class="invisible" value="<?php echo $id ?>" type="text">
                <button class="update-complaint-button" type="submit" name="submit">Update Complaint</button>
                <hr>
            </form>


        <?php
        }
        ?>
    </div>


</body>
<!-- <script src="../js/postcomplaints.js"></script> -->

</html>