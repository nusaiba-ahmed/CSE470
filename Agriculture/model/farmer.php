<?php 

include '../controller/db_con.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$age=$_POST['age'];
	$farmertype=$_POST['farmertype'];
	$location=$_POST['location'];

	
		$sql = "SELECT * FROM login WHERE username='$username'";
	    $sql2="SELECT email,id FROM login WHERE username='$username'";
       
		
		
		$result = mysqli_query($conn, $sql);
		$result1=mysqli_query($conn, $sql2);
		$email=mysqli_fetch_array($result1);

		$e=$email['email'];
		$id=$email['id'];
		
	
		if ($result->num_rows > 0 ) {
			
			$sql = "INSERT INTO farmer (username, email,age,farmertype,farmerid)
					VALUES ('$username','$e' , $age,'$farmertype',$id)";

		    $sql1="INSERT INTO farmerloc (username,nameloc)VALUES ('$username','$location')";
            $sql8="INSERT INTO sensors (userid) VALUES ($id)";

			$result = mysqli_query($conn, $sql);
            $result1 = mysqli_query($conn, $sql1);
			$resulte=mysqli_query($conn,$sql7);
			if ($result ) {
				
			
	            $age="";
	            $farmertype="";
	            $location="";
				$sql3="SELECT varification FROM farmer WHERE username='$username'";
				$result2=mysqli_query($conn, $sql3);
				$valid=mysqli_fetch_array($result2);
				$valid=$valid['varification'];
				


				if($valid!=0){
				
				echo "SUCCESSFULLY REGISTERED PLEASE WAIT FOR VERIFICATION";
				$username="";
				}
				else{
					
					header("location:../view/login.php");
				}
			} else {

			    echo "hi";
				#echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		} 
	
}

?>