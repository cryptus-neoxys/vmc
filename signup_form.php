<?php
include('includes/database.php');

if (isset($_POST['submit'])) {
	$fullname = $_POST['fullName'];
	$username = $_POST['username'];
	$gender = $_POST['gender'];
	$email = $_POST['emailId'];
	$password = $_POST['password'];
	$aadhar = $_POST['aadharNumber'];
	$ward = $_POST['wardNumber'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];


	$sql = mySQLi_query($con, "select * from user WHERE email='$email'");
	$row = mySQLi_num_rows($sql);
	if ($row > 0) {
		echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
	} else {
		$sql = "INSERT INTO user (fullname, username, email, aadhar, ward, gender, password)
		VALUES ('$fullname', '$username', '$email', '$aadhar', '$ward', '$gender', '$password')";
		// mySQLi_query($con, $sql);
		if (mysqli_query($con, $sql)) {
			echo "New record created successfully";
			echo "<script>alert('Account successfully created!'); window.location='signin.php'</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
	}
}
