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
    <style>
        .login-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login-subtitle {
            color: #eeb034;
            margin-bottom: 50px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            padding: 40px 80px;
            align-items: center;
            margin: auto;
            background-color: #FFD196;
        }
        .gender-list{
            display: flex;
            margin-bottom:20px;
        }
        .gender-list>label{
            margin-right:30px;
        }
    </style>
</head>

<?php

?>



<body>
    <div class="login-wrapper">
        <h1 class="login-title"> Vadodara Municipal Corporation </h1>
        <h2 class="login-subtitle"> Complaint Resolution portal</h2>
        <form class="login-form" algin="center" method="post" action="signin_form.php">
            <ul>
                <li>This page is for both unregistered users and unregistered admins</li>
            </ul>
            <h2 class="postscomplaints-title">User/Admin Signup</h2>
            <h3 style="font-size:25px;padding:0px;margin:5px;">Username</h3>
            <input name="username" id="username" style="margin-bottom:20px; width:350px; padding: 10px;" type="textarea" />
            <h3 style="font-size:25px;padding:0px;margin:5px;">Full Name</h3>
            <input name="fullName" id="fullName" style="margin-bottom:20px; width:350px; padding: 10px;" type="textarea" />
            <h3 style="font-size:25px;padding:0px;margin:5px;">Aadhar Number</h3>
            <input name="aadharNumber" id="aadharNumber" style="margin-bottom:20px; width:350px; padding: 10px;" type="textarea" />
            <h3 style="font-size:25px;padding:0px;margin:5px;">Email ID</h3>
            <input name="emailId" id="emailId" style="margin-bottom:20px; width:350px; padding: 10px;" type="textarea" />
            <h3 style="font-size:25px;padding:0px;margin:5px;">Ward Number</h3>
            <input name="wardNumber" id="wardNumber" style="margin-bottom:20px; width:350px; padding: 10px;" type="textarea" />
            <h3 style="font-size:25px;padding:0px;margin:5px;">Gender</h3>
            <div class="gender-list">
                <input type="radio" id="male" name="male" value="male">
                <label for="html">Male</label><br>
                <input type="radio" id="female" name="female" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="other" value="other">
                <label for="other">Other</label>
            </div>
            <h3 style="font-size:25px;padding:0px;margin:5px;">Password</h3>
            <input name="password" id="password" type="password" style="margin-bottom:20px; width:350px; padding: 10px;" type="textarea" />
            
            <br />
            <button type="submit" name="submit" style="padding: 5px 25px;">Signup</button>
        </form>
        <div>
</body>

</html>