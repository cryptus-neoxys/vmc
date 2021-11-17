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
</head>

<body>

    <form align="center" method="POST" action="update_complaint.php">
        <p class="name">Ohm</p>
        <p class="aadhar">239482193412</p>
        <p class="gender">M</p>
        <p class="type">Sanitation</p>
        <p class="body">pata nai</p>
        <input name="id" class="invisible" value="3" type="text">
        <input name="action" class="action" type="text">
        <p>Complaint resolved?</p>
        <input type="checkbox" id="html" name="resolved">
          <label for="resolved">Resolved</label><br>
        <button type="submit" name="submit">Submit</button>
    </form>


</body>
<!-- <script src="../js/postcomplaints.js"></script> -->

</html>