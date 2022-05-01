<?php 

include '../controller/db_con.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM login WHERE email='$email'";
		
		$result = mysqli_query($conn, $sql);
	
		if (!$result->num_rows > 0 ) {
			$sql = "INSERT INTO login (username, email, password)
					VALUES ('$username', '$email', '$password')";
		
			$result = mysqli_query($conn, $sql);
			
			if ($result ) {
				
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				header("location:../view/addmore.php");
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>