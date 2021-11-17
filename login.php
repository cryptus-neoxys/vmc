<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/vmc.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link rel="stylesheet" href="./css/postcomplaints.css">
</head>

<?php

?>



<body>
    <div style="display: flex;">
    <form style="display:flex; flex-direction:column;padding-top:80px; align-items:center; margin:auto;" algin="center" method="post" action="signin_form.php">
        <h2 class="postscomplaints-title">Admin Login </h2>
        <h3 style="font-size:25px;padding:0px;margin:5px;">username</h3>
        <input name="username" id="username" style="margin-bottom:20px; width:350px; padding: 10px;" type="textarea" />
        <h3 style="font-size:25px;padding:0px;margin:5px;">passcode</h3>
        <input name="password" id="password" style="margin-bottom:20px; width:350px; padding: 10px;" type="textarea" />
        <br />
        <button type="submit" style="padding: 5px 25px;">Login</button>
    </form>
    <div>
</body>
</html>