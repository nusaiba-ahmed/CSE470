<?php 

include '../controller/db_con.php';

error_reporting(0);

session_start();
 
if (isset($_POST['submit1'])) {
    $cropname=$_POST['cropname'];
    $croptype=$_POST['croptype'];
    $quantity=$_POST['quantity'];
    $harvestdate=strtotime($_POST['harvestdate']);
    $harvestdate=date('Y-m-d ', $harvestdate);
    $username=$_SESSION['username'];
	$exp="SELECT expire from expiredate Where cropname='$cropname'";
    $exp=mysqli_query($conn, $exp);
	$exp=mysqli_fetch_array($exp);
	$exp=$exp['expire'];
	$cal = date('Y-m-d',strtotime($harvestdate) + (24*60*60*$exp));
    $sql = "INSERT INTO inventory (cropname, cropquantity, dateharvest, croptype,id,expdate) VALUES ('$cropname',$quantity,'$harvestdate','$croptype',(select id from login Where login.username='$username'),'$cal') ";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $cropname="";
        $croptype="";
        $quantity="";
        $harvestdate="";
        $id="";
        
        header("location:userhome.php");
    } else {
        echo "<script>alert('Woops! Something Went Wrong.')</script>";
    
    }
	
		
		} 
		
	
	

?>