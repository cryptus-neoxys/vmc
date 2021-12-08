<?php
include('includes/database.php');

if (isset($_POST['submit'])) {
	$fullname = addslashes($_POST['fullName']);
	$username = addslashes($_POST['username']);
	$gender = addslashes($_POST['gender']);
	$email = addslashes($_POST['emailId']);
	$password = addslashes($_POST['password']);
	$aadhar = addslashes($_POST['aadharNumber']);
	$ward = addslashes($_POST['wardNumber']);
	$gender = addslashes($_POST['gender']);
	$password = addslashes($_POST['password']);


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
			$err = mysqli_error($con);
			echo "Error: " . $err;
			echo "<script>alert('Could not create account!Error'); window.location='signup.php'</script>";
			// echo "Error: " . mysqli_error($con) . "<br>";
			// " . mysqli_error($con) . "
		}
	}
}
