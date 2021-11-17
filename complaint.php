<?php
// include ('session.php');
?>
<?php
include('includes/database.php');

if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
}

if (isset($_POST['submit'])) {
	echo "starting insert ....\n";
	$name = $_POST['name'];
	$aadhar = $_POST['aadhar'];
	$gender = $_POST['gender'];
	$type = $_POST['type'];

	echo $name . " " . $aadhar;

	$result = mysqli_query($con, "INSERT INTO complaint (name, aadhar, gender, type) VALUES ('$name', '$aadhar', '$gender', '$type')");
	if ($result) {
		echo $result;
	} else {
		echo "failed to execute\n";
	}

	// echo "done ...\n";
	echo "<script>window.location='index.php'</script>";
}

?>