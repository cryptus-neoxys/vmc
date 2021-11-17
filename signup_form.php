<?php include ('session.php');?>
<?php
	include ('includes/database.php');
	
	if (isset($_POST['submit']))
	{
		$fullname=$_POST['fullname'];
		$username=$_POST['username'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
			$sql=mySQLi_query($con,"select * from user WHERE email='$email'");
			$row=mySQLi_num_rows($sql);
			if ($row > 0)
			{
			echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
			}
			else {
			mySQLi_query($con,"INSERT INTO user (fullname,username,gender,email,password)
			VALUES ('$fullname','$username', '$gender','$email','$password')");
			echo "<script>alert('Account successfully created!'); window.location='signin.php'</script>";
		}
			
	}
	
?>