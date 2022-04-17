<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Farmer</title>

</head>
<body>
<div class="twelve">
    <?php echo "<h1>Welcome  " . $_SESSION['username'] . "</h1>"; ?>
    <a href="../controller/logout.php">Logout</a>
    <h2>INVENTORY</h2>
</div>
    <style type="text/css">
       
  body
    {
background-image: url(inventory.jpg);
background-repeat: no-repeat;
background-size: 1920px 1080px;

    }
    a{
      margin: 1em 0 0.5em 0;
	font-weight: 600;
	font-family: 'Titillium Web', sans-serif;
	position: relative;
	text-shadow: 0 -1px 1px rgba(0,0,0,0.4);
	font-size: 22px;
	line-height: 40px;
	color: #355681;
	text-transform: uppercase;
	border-bottom: 1px solid rgba(53,86,129, 0.3);
    }
    h1{
      margin: 1em 0 0.5em 0;
	font-weight: normal;
	position: relative;
	text-shadow: 0 -1px rgba(0,0,0,0.6);
	font-size: 28px;
	line-height: 40px;
	background: #355681;
	background: rgba(53,86,129, 0.8);
	border: 1px solid #fff;
	padding: 5px 15px;
	color: white;
	border-radius: 0 10px 0 10px;
	box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
	font-family: 'Muli', sans-serif;
    }
    .twelve h2 {
  font-size:48px; font-weight:700;  letter-spacing:1px; text-transform:uppercase; width:160px; text-align:center; margin:auto; white-space:nowrap; padding-bottom:13px;
}
.twelve h2:before {
    background-color: #c50000;
    content: '';
    display: block;
    height: 3px;
    width: 75px;
    margin-bottom: 5px;
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
      <div class="col col-1">Crop Name</div>
      <div class="col col-2">Crop Type</div>
      <div class="col col-3">Quantity</div>
      <div class="col col-4">Harvest Date</div>
      <div class="col col-5">Unique Code</div>
      <div class="col col-5">Expire Date</div>
    </li>
    </ul>
    </div>
    <?php

require_once("../controller/db_con.php");
  $username=$_SESSION['username'];
   $sql="SELECT * FROM inventory INNER JOIN login ON inventory.id=login.id WHERE login.username='$username'";
   

$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) != 0){
    while($row = mysqli_fetch_array($result)){
  ?>
  <div class=row>
     <div class="col-md-2"><?php echo $row[0]; ?></div>
     <div class="col-md-2"><?php echo $row[3]; ?></div>
     <div class="col-md-2"><?php echo $row[1]; ?></div>
     <div class="col-md-2"><?php echo $row[2]; ?></div>
     <div class="col-md-2"><?php echo $row[5]; ?></div>
     <div class="col-md-2"><?php echo $row[5]; ?></div>
  
  </div>

  <?php
    }
  }
  
?>
</div>
 
</div>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Answer to questions </button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modalcontent">
      <div class="modalheader">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modalbody">
      <div class="container">
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Question</div>
      <div class="col col-1">Answer</div>
    </li>
    </ul>
    </div>
      <?php

require_once("../controller/db_con.php");
  $username=$_SESSION['username'];
   $sql="SELECT * FROM queries WHERE queryuser='$username'";

$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) != 0){
    while($row = mysqli_fetch_array($result)){
  ?>
  <div class=row>
  <div class="col-md-2"style="font-size: 2rem; font-weight: 800; color:azure;"><?php echo $row[1]; ?></div>
     <div class="col-md-2"style="font-size: 2rem; font-weight: 800; color:azure;"><?php echo $row[3]; ?></div>
     
  </div>

  <?php
    }
  }
  
?>
      </div>
      <div class="modalfooter">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>
<form action="INVENTORY.php" class="form_design1" method="post">

  
<input type="submit" name="submit" value="ADD NEW ITEM"> 


</form>
<form action="ask.php" class="form_design" method="post">

  
<input type="submit" name="submit" value="ASK QUERY"> 
</form>
<form action="Update.php" class="form_design2" method="post">

  
<input type="submit" name="submit" value="UPDATE QUANTITY"> 
</form>


<form action="policy.php" class="form_design3" method="post">

  
<input type="submit" name="submit" value="POLICY"> 


</form>
</body>
</html>