<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome ADMIN</title>
</head>
<body>
<div class="twelve">
    <?php echo "<h3>Welcome  " . $_SESSION['username'] . "</h3>"; ?>
    <a href="../controller/logout.php">Logout</a>
   
</div>
    <style type="text/css">
       
  body
    {
background-image: url(admin.jpg);
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

    h3{
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
  
</style>
  



<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
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

  
 .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
  border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
 .table-title {        
  padding-bottom: 15px;
  background: #0d2438;
  color: #fff;
  padding: 16px 30px;
  margin: -20px -25px 10px;
  border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
  margin: 5px 0 0;
  font-size: 24px;
 }
 .table-title .btn-group {
  float: right;
 }
 .table-title .btn {
  color: #fff;
  float: right;
  font-size: 13px;
  border: none;
  min-width: 50px;
  border-radius: 2px;
  border: none;
  outline: none !important;
  margin-left: 10px;
 }
 .table-title .btn i {
  float: left;
  font-size: 21px;
  margin-right: 5px;
 }
 .table-title .btn span {
  float: left;
  margin-top: 2px;
 }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
  padding: 12px 15px;
  vertical-align: middle;
    }
 table.table tr th:first-child {
  width: 60px;
 }
 table.table tr th:last-child {
  width: 100px;
 }
    table.table-striped tbody tr:nth-of-type(odd) {
     background-color: #fcfcfc;
 }
 table.table-striped.table-hover tbody tr:hover {
  background: #f5f5f5;
 }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    } 
    table.table td:last-child i {
  opacity: 0.9;
  font-size: 22px;
        margin: 0 5px;
    }
 table.table td a {
  font-weight: bold;
  color: #566787;
  display: inline-block;
  text-decoration: none;
  outline: none !important;
 }
 table.table td a:hover {
  color: #2196F3;
 }
 table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
 table.table .avatar {
  border-radius: 50%;
  vertical-align: middle;
  margin-right: 10px;
 }
 
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    } 
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
 .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    } 
    
 /* Custom checkbox */
 .custom-checkbox {
  position: relative;
 }
 .custom-checkbox input[type="checkbox"] {    
  opacity: 0;
  position: absolute;
  margin: 5px 0 0 3px;
  z-index: 9;
 }
 .custom-checkbox label:before{
  width: 18px;
  height: 18px;
 }
 .custom-checkbox label:before {
  content: '';
  margin-right: 10px;
  display: inline-block;
  vertical-align: text-top;
  background: white;
  border: 1px solid #bbb;
  border-radius: 2px;
  box-sizing: border-box;
  z-index: 2;
 }
 .custom-checkbox input[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
  left: 6px;
  top: 3px;
  width: 6px;
  height: 11px;
  border: solid #000;
  border-width: 0 3px 3px 0;
  transform: inherit;
  z-index: 3;
  transform: rotateZ(45deg);
 }
 .custom-checkbox input[type="checkbox"]:checked + label:before {
  border-color: #03A9F4;
  background: #03A9F4;
 }
 .custom-checkbox input[type="checkbox"]:checked + label:after {
  border-color: #fff;
 }
 .custom-checkbox input[type="checkbox"]:disabled + label:before {
  color: #b8b8b8;
  cursor: auto;
  box-shadow: none;
  background: #ddd;
 }
 /* Modal styles */
 .modal .modal-dialog {
  max-width: 400px;
 }
 .modal .modal-header, .modal .modal-body, .modal .modal-footer {
  padding: 20px 30px;
 }
 .modal .modal-content {
  border-radius: 3px;
 }
 .modal .modal-footer {
  background: #ecf0f1;
  border-radius: 0 0 3px 3px;
 }
    .modal .modal-title {
        display: inline-block;
    }
 .modal .form-control {
  border-radius: 2px;
  box-shadow: none;
  border-color: #dddddd;
 }
 .modal textarea.form-control {
  resize: vertical;
 }
 .modal .btn {
  border-radius: 2px;
  min-width: 100px;
 } 
 .modal form label {
  font-weight: normal;
 }
</style> 
<script type="text/javascript">
$(document).ready(function(){
 // Activate tooltip
 $('[data-toggle="tooltip"]').tooltip();
  
 // Select/Deselect checkboxes
 var checkbox = $('table tbody input[type="checkbox"]');
 $("#selectAll").click(function(){
  if(this.checked){
   checkbox.each(function(){
    this.checked = true;                        
   });
  } else{
   checkbox.each(function(){
    this.checked = false;                        
   });
  } 
 });
 checkbox.click(function(){
  if(!this.checked){
   $("#selectAll").prop("checked", false);
  }
 });
    $('#cmdeleteselected').click (function(event) {
  event.preventDefault();
        var selected = new Array();
   $("input:checkbox[name=options]:checked").each(function() {
    selected.push($(this).val());
   });
  var selectedString = selected.join(",");
        $.post("../model/delete.php", {selected: selected },
        function(data){
   $('#deleteFarmerModalselected').modal('hide');
            $('.result').html(data);
        });  
    });
    $('#cmdvalidateselected').click (function(event) {
       
  event.preventDefault();
        var selected = new Array();
   $("input:checkbox[name=options]:checked").each(function() {
    selected.push($(this).val());
   });
  var selectedString = selected.join(",");
        $.post("../model/validate.php", {selected: selected },
        function(data){
   $('#validateFarmerModalselected').modal('hide');
            $('.result').html(data);
        });  
    });
});
</script>
</head>
<body>
<?php 
include '../controller/db_con.php'; 
if(isset($_POST["cmdaddnew"])){
    $edit_username = $_POST["username"];
    $edit_email = $_POST["email"];
    $edit_age = $_POST["age"];
    $edit_farmertype = $_POST["farmertype"];
    $edit_farmerid=$_POST["farmerid"];
    $sql = "INSERT INTO farmer (username, email,  age, farmertype,farmerid)
    VALUES ('$edit_username','$edit_email ',$edit_age , '$edit_farmertype ',$edit_farmerid)";
    if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
}
$page = (isset($_GET['page']))?$_GET['page']:'';
$editfarmer = (isset($_GET['editfarmer']))?$_GET['editfarmer']:'';
$deletefarmer = (isset($_GET['deletefarmer']))?$_GET['deletefarmer']:'';
 
if ($deletefarmer==''){
}else{
echo "<script type= 'text/javascript'>$(document).ready(function(){ $('#deleteFarmerModal').modal() });</script>";
}
if(isset($_POST["cmdelete"])){
   $sql = "DELETE FROM farmer WHERE farmerid='$deletefarmer'";
 if ($conn->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Record deleted successfully');
  window.location.replace('adminhome.php');</script>";  
 } else {
  echo "<script type= 'text/javascript'>alert('Error deleting record: " . $sql . "<br>" . $conn->error."');</script>"; 
 }
}
if ($editfarmer==''){
}else{
 echo "<script type= 'text/javascript'>$(document).ready(function(){ $('#editFarmerModal').modal() });</script>";
 $results = mysqli_query($conn,"SELECT * FROM farmer Where farmerid=$editfarmer");
 while($row = mysqli_fetch_array($results))
 {
  
  $edit_username = $row["username"];
  $edit_email = $row["email"];
  $edit_age = $row["age"];
  $edit_farmertype = $row["farmertype"];
 }
}
 
if(isset($_POST["cmdedit"])){
   $editname = $_POST["editname"];
   $editemail = $_POST["editemail"];
   $editage = $_POST["editage"];
   $editfarmertype = $_POST["editfarmertype"];
   $sql = "UPDATE farmer SET username='$editname', email='$editemail', age='$editage', farmertype='$editfarmertype' WHERE farmerid='$editfarmer'";
   if (mysqli_query($conn, $sql)) {
     echo "<script type= 'text/javascript'>alert('Record updated successfully');
  window.location.replace('adminhome.php');</script>";  
   } else {
     echo "<script type= 'text/javascript'>alert('Error updating record: " . $sql . "<br>" . $conn->error."');</script>"; 
   }
}
if ($page==''){
 $page = "1";
}else{
 $page = $_GET['page'];
}
$cur_page = $page;
$page -= 1;
$per_page = 5; 
$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;
$start = $page * $per_page;
$query_pag_data = "SELECT * from farmer LIMIT $start, $per_page";
$result_pag_data = mysqli_query($conn, $query_pag_data);
?>
<div class="container"><div class = "result"></div>
 <p><h1 align="center">FARMER DETAILS</h1></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>MANAGE <b>FARMER </b></h2>
     </div>
     <div class="col-sm-6">
      <a href="#addFarmerModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New Farmer</span></a>
      <a href="#deleteFarmerModalselected" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Delete</span></a> 
      <a href="#validateFarmerModalselected" class="btn btn-primary" data-toggle="modal"><i class="material-icons"></i> <span>Validate</span></a>

     </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
     <tr>
      <th>
       <span class="custom-checkbox">
        <input type="checkbox" id="selectAll">
        <label for="selectAll"></label>
       </span>
      </th>
                        <th>Name</th>
                        <th>Email</th>
      <th>Age</th>
                        <th>Farmertype</th>
                        <th>Locations</th>
                        <th>Verify Status</th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
    while($row = mysqli_fetch_assoc($result_pag_data)) {
     $username=$row['username']; 
     $email=$row['email']; 
     $age=$row['age']; 
     $farmertype=$row['farmertype']; 
     $verify=$row['varification'];
     $sql4 = "SELECT * FROM farmerloc WHERE username='alexa'";
     $result4 = mysqli_query($conn, $sql4);


    ?>
                    <tr>
      <td>
       <span class="custom-checkbox">
        <input type="checkbox" id="checkbox1" name="options" value="<?php echo $row['farmerid']; ?>">
        <label for="checkbox1"></label>
       </span>
      </td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $email; ?></td>
      <td><?php echo $age; ?></td>
                        <td><?php echo $farmertype; ?></td>
                        <td><?php while($row1 = mysqli_fetch_array($result4)){echo"" . $row1[1] . "<br>"; } ?></td>
                        <td>
   <?php
        if( $verify== 1 ) {
            
           echo" <span>&#10005;</span>";
         
        } else {
            
            echo"<span>&#10003;</span>";
        }
  ?>
</td>
                        <td>
                            <a href="?editfarmer=<?php echo $row['farmerid']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit"></i></a>
                            <a href="?deletefarmer=<?php echo $row['farmerid']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
    <?php } ?> 
                </tbody>
   </table>
   <div class="clearfix">
<?php
$msg = "";
$query_pag_num = mysqli_query($conn,"SELECT COUNT(*) AS mycount FROM farmer" ) or die(mysqli_error($this->dblink));
$res = mysqli_fetch_object($query_pag_num);
$count = $res->mycount;
$no_of_paginations = ceil($count / $per_page);
// ---------------Calculating the starting and endign values for the loop----------------------------------- 
if ($cur_page >= 7) {
    $start_loop = $cur_page - 3;
    if ($no_of_paginations > $cur_page + 3)
        $end_loop = $cur_page + 5;
    else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 3) {
        $start_loop = $no_of_paginations - 3;
        $end_loop = $no_of_paginations;
    } else {
        $end_loop = $no_of_paginations;
    }
} else {
    $start_loop = 1;
    if ($no_of_paginations > 7)
        $end_loop = 7;
    else
        $end_loop = $no_of_paginations;
}
//----------------------------------------------------------------------------------------------------------- 
$msg .= "<ul class=\"pagination\">";
// FOR ENABLING THE FIRST BUTTON
if ($first_btn && $cur_page > 1) {
    $msg .= "<li p='1' class='page-item active'><a href='?page=1' class='page-link'>First</a></li>";
} else if ($first_btn) {
    $msg .= "<li p='1' class='page-item' disabled><a href='?page=1'>First</a></li>";
}
// FOR ENABLING THE PREVIOUS BUTTON
if ($previous_btn && $cur_page > 1) {
    $pre = $cur_page - 1;
    $msg .= "<li p='$pre' class='page-item active'><a href='?page=$pre' class='page-link'>Previous</a></li>";
} else if ($previous_btn) {
    $msg .= "<li class='page-item' disabled><a href='?page=1'>Previous</a></li>";
}
for ($i = $start_loop; $i <= $end_loop; $i++) {
    if ($cur_page == $i)
        $msg .= "<li p='$i' class='page-item active'><a href='?page=$i' class='page-link'>{$i}</a></li>";
    else
        $msg .= "<li p='$i' class='page-item'><a href='?page={$i}' class='page-link'>{$i}</a></li>";
}
// TO ENABLE THE NEXT BUTTON
if ($next_btn && $cur_page < $no_of_paginations) {
    $nex = $cur_page + 1;
    $msg .= "<li p='$nex' class='page-item'><a href='?page=$nex' class='page-link'>Next</a></li>";
} else if ($next_btn) {
    $msg .= "<li class='page-item' disabled><a href='#'>Next</a></li>";
}
// TO ENABLE THE END BUTTON
if ($last_btn && $cur_page < $no_of_paginations) {
    $msg .= "<li p='$no_of_paginations' class='page-item'><a href='?page=$no_of_paginations' class='page-link'>Last</a></li>";
} else if ($last_btn) {
    $msg .= "<li p='$no_of_paginations' class='page-item' disabled><a href='?page=$no_of_paginations'>Last</a></li>";
}
$total_string = "<div class=\"hint-text\">Showing <b>" . $cur_page . "</b> out of <b>$no_of_paginations</b> entries</div>";
$msg = $msg . "</ul>";  
echo $total_string;
echo $msg;
?>
            </div>   
  </div>
</div> 
 
<!-- add Modal HTML -->
 <div id="addFarmerModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form action="" method="post">
     <div class="modal-header">      
      <h4 class="modal-title">Add Farmer</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>Name</label>
       <input type="text" name="username" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Email</label>
       <input type="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Age</label>
       <textarea class="number" name="age" required></textarea>
      </div>
      <div class="form-group">
       <label>Farmer Type</label>
       <input type="text" name="farmertype" class="form-control" required>
      </div>   
      <label>Farmer ID</label>
       <input type="number" name="farmerid" class="form-control" required>
      </div>   
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-success" name="cmdaddnew" value="Add">
     </div>
    </form>
   </div>
  </div>
 </div> 
 
 <!-- Edit Modal HTML -->
 <div id="editFarmerModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form name="frmedit" action="" method="post">
     <div class="modal-header">      
      <h4 class="modal-title">Edit Farmer</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>Name</label>
       <input type="text" name="editname" value="<?php echo $edit_username; ?>" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Email</label>
       <input type="email" name="editemail" value="<?php echo $edit_email; ?>" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Age</label>
       <textarea class="number" name="editage" required><?php echo $edit_age; ?></textarea>
      </div>
      <div class="form-group">
       <label>Farmer Type</label>
       <input type="text" name="editfarmertype" value="<?php echo $edit_farmertype; ?>" class="form-control" required>
      </div>     
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" name="cmdedit" class="btn btn-info" value="Save">
     </div>
    </form>
   </div>
  </div>
 </div>
  
 <!-- Delete Modal HTML -->
 <div id="deleteFarmerModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form name="frmdelete" action="" method="post">
     <div class="modal-header">      
      <h4 class="modal-title">Delete Farmer</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body">     
      <p>Are you sure you want to delete these Records?</p>
      <p class="text-warning"><small>This action cannot be undone.</small></p>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" name="cmdelete" class="btn btn-danger" value="Delete">
     </div>
    </form>
   </div>
  </div>
 </div>
 <div id="deleteFarmerModalselected" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form name="frmdelete" action="" method="post">
     <div class="modal-header">      
      <h4 class="modal-title">Delete Selected Farmer</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body">     
      <p>Are you sure you want to all the selected delete Records?</p>
      <p class="text-warning"><small>This action cannot be undone.</small></p>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <a href="#" id="cmdeleteselected" class="btn btn-danger">Delete</a>
     </div>
    </form>
   </div>
  </div>
 </div>
 <div id="validateFarmerModalselected" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form name="frmdelete" action="" method="post">
     <div class="modal-header">      
      <h4 class="modal-title">Validate Selected Farmer</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <a href="#" id="cmdvalidateselected" class="btn btn-danger">Validate</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
<div class="btn-group-vertical">
<form action="https://termly.io/products/privacy-policy-generator/" class="form_design.." method="post">

  
    <input class="btn btn-primary btn-lg" type="submit"name="submit"  value="EDIT POLICY">


</form>
<form action="question.php" class="form_design.." method="post">


  
<input class="btn btn-primary btn-lg" type="submit"name="submit"  value="QUESTIONS">
 



</div>
</html>