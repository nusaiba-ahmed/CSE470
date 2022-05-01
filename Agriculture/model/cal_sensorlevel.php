<?php
 require_once("../controller/db_con.php");
 $username=$_SESSION['username'];
  $sql="SELECT waterlevel,nitrogenlevel FROM sensors Where userid=(Select id FROM login WHERE username='$username')";
  
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) != 0){
   while($row = mysqli_fetch_array($result)){
if (isset($row['waterlevel'])){

if ($row['waterlevel'] <= 20) {
    echo '<link rel="stylesheet" type="text/css" href="../view/sensor.css">
    <div id="InfoBanner" style="">
    <span class="reversed reversedRight">
      <span>
        &#9888;
      </span>
    </span>
    <span class="reversed reversedLeft">
      Warning WATER LEVEL LOW> PLEASE WATER YOUR CROPS.
    </span> 
  </div>
';

 
}
}
if (isset($row['nitrogenlevel'])){
if ($row['nitrogenlevel'] <= 20) {
    echo '<link rel="stylesheet" type="text/css" href="../view/sensor.css">
    <div id="InfoBanner1" style="">
    <span class="reversed reversedRight">
      <span>
        &#9888;
      </span>
    </span>
    <span class="reversed reversedLeft">
      Warning NITROGEN LEVEL LOW.PLEASE USE FERTILISER.
    </span> 
  </div>';
 
}}
   }
}
?>