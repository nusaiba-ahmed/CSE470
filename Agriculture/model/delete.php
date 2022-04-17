<?php
include"dbcon.php"; 
$selected  = $_POST['selected'];
foreach ($selected as $value) {
 $sql = "DELETE FROM farmer WHERE farmerid='$value'";
 if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully $value <br/>";  
 } else {
  echo "Error deleting record: " . $sql . "<br>" . $conn->error."'"; 
 } 
 
}
?>