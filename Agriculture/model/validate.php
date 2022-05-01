<?php

include"../controller/db_con.php"; 
$selected  = $_POST['selected'];
foreach ($selected as $value) {
 $sql = "UPDATE farmer SET varification=0   WHERE farmerid='$value'";
 if ($conn->query($sql) === TRUE) {
  echo "Record validated successfully  <br/>"; 
  
 } else {
  echo "Error validating record: " . $sql . "<br>" . $conn->error."'"; 
 } 
 
}
?>