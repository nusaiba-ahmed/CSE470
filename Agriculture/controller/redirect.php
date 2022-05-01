
<?php
include "../controller/db_con.php";

session_start();

error_reporting(0);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"]; 


	$sql="select * from login where email='$email' AND password='$password' ";
    $result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		
			if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$row["username"];
		
		

		header("location:userhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$row["username"];
		
		
		header("location:adminhome.php");
	}

	else
	{
		echo "email or password incorrect";
	}
		 
		}
	  } 
	  else
	  {
		  echo "email or password incorrect";
	  }
	

}
?>