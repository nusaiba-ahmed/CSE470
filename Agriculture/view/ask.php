<?php 

include ("../controller/db_con.php");

error_reporting(0);

session_start();
if (isset($_POST['submit5'])) {

$query=$_POST['query'];
$user=$_SESSION['username'];


            $sql = "INSERT INTO queries (query,queryuser)
            VALUES ('$query','$user')";
           
           $result = mysqli_query($conn, $sql);
           if ($result) {
            $query="";
            
            header("location:userhome.php");
        } else {
            echo "<script>alert('Woops! Something Went Wrong.')</script>";
        }
           


        }




 ?>

 <style>
     body{
     background-image: url(admin.jpg);
     background-repeat: no-repeat;
     background-size: 1920px 1080px;
}
     .container {
    width: 400px;
    min-height: 400px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
    transform: translateX(150%);
    
 
}

.container .ask .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
  
}
.container .ask .input-group .btn:hover {
    transform: translateY(-5px);
    background: #6c5ce7;
   
}
  </style>
<!DOCTYPE html>
<html>
<head>
	
	<title>ASK </title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="ask">
            <p class="ask-text" style="font-size: 2rem; font-weight: 800;">Ask Your question</p>
			<div class="input-group">
				<input type="text" placeholder="Query" name="query" value="<?php echo $query; ?>" required>
			</div>
			
				<button name="submit5" class="btn">ASK</button>
			</div>
			
		</form>
	</div>
</body>
</html>