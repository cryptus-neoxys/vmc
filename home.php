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
        <button class="unresolved">Unresolved</button>
        <button class="resolved">Resolved</button>
    </div>
    <div class="complaints_container">
    <form class="complaint_form" align="center" method="post" action="update_complaint.php">
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
        <button class="update-complaint-button"type="submit" name="submit">Update Complaint</button>
    </form>
    </div>
    
</body>
<!-- <script src="../js/postcomplaints.js"></script> -->

</html>