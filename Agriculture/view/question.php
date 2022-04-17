<?php 
include '../controller/db_con.php';
session_start();
if (isset($_POST['submit7'])) {
    $id=$_POST['id'];
    $ans=$_POST['ans'];
    $admin=$_SESSION['username'];
    
                $sql = "UPDATE queries SET answer='$ans' , answeradmin='$admin' WHERE Qid=$id";
               
               $result = mysqli_query($conn, $sql);
               if ($result) {
                $ans="";
                $id="";
                
                
            } else {
                echo "<script>alert('Woops! Something Went Wrong.')</script>";
            }
               
    
    
            }
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <style type="text/css">
       
  body
    {
background-image: url(admin.jpg);
background-repeat: no-repeat;
background-size: 1920px 1080px;

    }
    
   
  

  .form_design1
  {
    font-size: 24px;
    margin: 0;
    padding: 12px 28px;
    width:250px;
    text-align: center;
    font-family:  sans-serif;
    position: absolute;
    left:50%;
    top:90%;
    transform: translateX(-50%);

  }
  .form_design2
  {
    font-size: 24px;
    margin: 0;
    padding: 12px 28px;
    width:250px;
    text-align: center;
    font-family:  sans-serif;
    position: absolute;
    left:70%;
    top:90%;
    transform: translateX(-50%);

  }
  .form_design3
  {
    font-size: 24px;
    margin: 0;
    padding: 12px 28px;
    width:250px;
    text-align: center;
    font-family:  sans-serif;
    position: absolute;
    left:90%;
    top:90%;
    transform: translateX(-50%);

  }
 
  .form_design
  {
    font-size: 24px;
    margin: 0;
    padding: 12px 28px;
    width:250px;
    text-align: center;
    font-family:  sans-serif;
    position: absolute;
    left:20%;
    top:90%;
    transform: translateX(-50%);

  }

  
  .container {
  max-width: 1100px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
  transform: translateX(-1.5%);
  

}

 
.table-header {
  font-family:  sans-serif;
  border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
    background-color: #95A5A6;
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    
  }
.row{
  font-family:  sans-serif;
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
  border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
    background-color: rgba(51, 81, 81 ,0.6);
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
}

  
  </style>
  
  <div class="container">
  <ul class="responsive-table">
    <li class="table-header">
    <div class="col col-1">QUESTION NUMBER</div>
    <div class="col col-1">QUESTIONS</div>
     
      
      
    </li>
    </ul>
    </div>
    <?php

require_once("../controller/db_con.php");
  $username=$_SESSION['username'];
   $sql="SELECT * FROM queries WHERE query!='NULL'";

$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) != 0){
    while($row = mysqli_fetch_array($result)){
  ?>
  <div class=row>
  <div class="col-md-2"><?php echo $row[0]; ?></div>
     <div class="col-md-2"><?php echo $row[1]; ?></div>
   
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Answer</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modalcontent">
        <div class="modalheader">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modalbody">
        <form action="" method="POST" class="ask">
            <p class="ask-text" style="font-size: 2rem; font-weight: 800; color:azure;">Answer:</p>
			<div class="input-group">
				<input type="text" placeholder="Answer" name="ans" value="<?php echo $ans; ?>" required>
			</div>
            <div class="input-group">
				<input type="number" placeholder="NUMBER" name="id" value="<?php echo $id; ?>" required>
			</div>
			
				<button name="submit7" class="btn">ANSWER</button>
			</div>
			
		</form>
        </div>
        <div class="modalfooter">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  

  <?php
    }
  }
  
?>
</div>
 
</div>
<div class="container">
  <ul class="responsive-table">
    <li class="table-header">
    <div class="col col-1">QUESTION NUMBER</div>
      <div class="col col-1">Answers</div>
      
    </li>
    </ul>
    </div>
    <?php

require_once("../controller/db_con.php");
  $username=$_SESSION['username'];
 $sql="SELECT * FROM queries WHERE query!='NULL'";

$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) != 0){
    while($row = mysqli_fetch_array($result)){
  ?>
  <div class=row>
  <div class="col-md-2"><?php echo $row[0]; ?></div>
     <div class="col-md-2"><?php echo $row[3]; ?></div>
     
  
  </div>
  <?php
    }
  }
  
  
?>


</body>
</html>


