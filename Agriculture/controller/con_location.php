<?php
require_once("../controller/db_con.php");
  $username=$_SESSION['username'];
   $sql="SELECT farmerloc.nameloc, location.suggestedcrops
   FROM farmerloc
   INNER JOIN location ON farmerloc.nameloc=location.location WHERE farmerloc.username='$username'";
   
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) != 0){
    while($row = mysqli_fetch_array($result)){
  ?>
  <div class=row>
  <div class="col-md-2"style="font-size: 2rem; font-weight: 800; color:azure;"><?php echo $row[0]; ?></div>
  <div class="col-md-2"style="font-size: 2rem; font-weight: 800; color:azure;"><?php echo $row[1]; ?></div>  
  </div>

  <?php
    }
  }
  
?>