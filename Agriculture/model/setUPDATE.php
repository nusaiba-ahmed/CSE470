<?php 

include '../controller/db_con.php';

error_reporting(0);

session_start();
 
if (isset($_POST['submit2'])) {
    
    $quantity=$_POST['quantity'];
    $uid=$_POST['uid'];
    
	
   
    $sql = "UPDATE inventory SET cropquantity=$quantity WHERE uid=$uid ";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
       
        
        $quantity="";
        $uid="";
        
        header("location:userhome.php");
    } else {
        echo "<script>alert('Woops! Something Went Wrong.')</script>";
    
    }
	
		
		} 
		
	
	
?>