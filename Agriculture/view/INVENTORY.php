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
	
    
    $sql = "INSERT INTO inventory (cropname, cropquantity, dateharvest, croptype,id) VALUES ('$cropname',$quantity,'$harvestdate','$croptype',(select id from login Where login.username='$username')) ";
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
  </style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>ADD INVENTORY </title>
</head>
<body>

	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="add/update" style="font-size: 2rem; font-weight: 800;">ADD</p>
			<div class="input-group">
				<input type="text" placeholder="Crop Name" name="cropname" value="<?php echo $cropname; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Crop Type" name="croptype" value="<?php echo $croptype; ?>" required>
			</div>
			<div class="input-group">
				<input type="number" placeholder="Quantity" name="quantity" value="<?php echo $quantity; ?>" required>
            </div>
            <div class="input-group">
				<input type="date" placeholder="Harvest Date" name="harvestdate" value="<?php echo $harvesdtdate; ?>" required>
			</div>
           
			<div class="input-group">
				<button name="submit1" class="btn">ADD</button>
			</div>
			
		</form>
	</div>
</body>
</html>