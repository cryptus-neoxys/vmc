<!DOCTYPE html>
<!-- 
  12th August 2021 and 19th August 2021
  19BCE0151
  Ohm Patel
-->


<html>

<head>
    <title>Post Complaints</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/vmc.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/scrollbar.css">
    <link rel="stylesheet" href="./css/postcomplaints.css">
</head>

<body>

    <?php
    // define variables and set to empty values

    $name = $aadhar = $gender = $complaint = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $aadhar = $_POST["aadhar"];
        $gender = $_POST["gender"];
        $complaint = $_POST["complaint"];
    }
    ?>
    <form align="center" method="post" action="complaint.php">
        <div class="postcomplaints-title">
            <div class="banner-behind">
                <div class="banner-front">
                    <h1>Complaint Register</h1>
                </div>
            </div>
        </div>
        <h2>Instructions to fill the form:</h2>
        <ul class="instruction-list">
            <li>All details are to be compulsarily filled.</li>
            <li>Use Capital letters for all the details</li>
            <li>Do not submit multiple complaints for the same issue</li>
        </ul>
        <h3 style="font-size:25px;padding:0px;margin:5px;">Name</h3>
        <input name="name" id="name" style="margin-bottom:20px;" type="textarea" />

        <h3 style="font-size:25px;padding:0px;margin:5px;">Aadhar Number</h3>
        <input name="aadhar" id="aadhar" style="margin-bottom:20px;" type="textarea" />

        <h3 style="font-size:25px;padding:0px;margin:5px;">Gender</h3>
        <input type="radio" id="male" name="gender" value="male">
          <label for="male">Male</label><br>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
          <label for="other">Other</label><br>

        <h3 style="font-size:25px;padding:0px;margin:20px;">Type of complaint</h3>
        <select name="type" id="type">
            <option value="sanitation">Sanitation</option>
            <option value="technological">Technological</option>
            <option value="construction_related">Construction Related</option>
            <option value="other">Other</option>
        </select>
        <br>
        <button type="submit" name="submit" id="btn-sub">Submit Details</button>
    </form>

    <h4 align="center">These complaints are overseen by:</h4>
    <dl align="center">
        <dt>Municipal Head Officer</dt>
        <dd>Walter White</dd>
        <dt>District Magistrate</dt>
        <dd>Jesse Pinkman</dd>
    </dl>
    <footer>
        <br>5th August 2021<br>19BCE0151<br>Ohm Patel<br>
    </footer>

    <?php
    echo "<h3>Your Input:</h3>";
    echo "<h4>Dev Sharma 19BCE0171</h4>";
    echo $name;
    echo "<br>";
    echo $aadhar;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $complaint;

    ?>
</body>
<!-- <script src="../js/postcomplaints.js"></script> -->

</html>