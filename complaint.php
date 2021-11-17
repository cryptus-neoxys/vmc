<!-- <?php 
// include ('session.php');
?> -->
<?php
	include ('includes/database.php');
	
	if (isset($_POST['complaint']))
	{
		$name=$_POST['name'];
		$aadhar=$_POST['aadhar'];
		$gender=$_POST['gender'];
		$type=$_POST['type'];
		

		{
			$result = mysqli_query($con,"INSERT INTO complaint (name, aadhar, gender, type)
			VALUES ('$name', '$aadhar,' '$gender,' '$type')");
			echo "<script>window.location='index.php'</script>";
		}
			
	}
	
?>