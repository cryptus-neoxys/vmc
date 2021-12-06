<?php
include('includes/database.php');

if (isset($_POST['submit'])) {
	$fullname = $_POST['fullName'];
	echo $fullname;
	$username = $_POST['username'];
	echo $username;
	$gender = $_POST['gender'];
	echo $gender;
	$email = $_POST['emailId'];
	echo $email;
	$password = $_POST['password'];
	echo $password;
	$aadhar = $_POST['aadharNumber'];
	echo $aadhar;
	$ward = $_POST['wardNumber'];
	echo $ward;
	$gender = $_POST['gender'];
	echo $gender;
	$password = $_POST['password'];
	echo $password;


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
