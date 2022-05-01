<?php


$query="SELECT uid,DATEDIFF(expdate, NOW()) AS date_diff FROM inventory INNER JOIN login ON inventory.id=login.id WHERE login.username='$username'";
$results=mysqli_query($conn, $query);
foreach ($results as $row1) {
    if ($row1['date_diff'] <= 10) {
        echo '	<link rel="stylesheet" type="text/css" href="../view/styling.css">	
        <div class="warning-msg">
  <i class="fa fa-warning"></i>
  WARNING UNIQUE ID '.$row1['uid'].' is about to expire in 10 days
</div>
';
     
    }
}
?>