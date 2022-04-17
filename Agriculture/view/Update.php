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
				<input type="text" placeholder="Unique ID" name="uid" value="<?php echo $uid; ?>" required>
			</div>
			
			<div class="input-group">
				<input type="number" placeholder="Quantity" name="quantity" value="<?php echo $quantity; ?>" required>
            </div>
            
           
			<div class="input-group">
				<button name="submit2" class="btn">UPDATE</button>
			</div>
			
		</form>
	</div>
</body>
</html>