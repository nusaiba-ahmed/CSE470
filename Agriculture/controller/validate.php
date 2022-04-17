
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location:../view/");
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title>
</head>
<body>
<?php echo "<h1>Registration Done . Please wait for validation  </h1>"; ?>
    <a href="../view/login.php">Validation done you may login</a>
</body>
</html>
