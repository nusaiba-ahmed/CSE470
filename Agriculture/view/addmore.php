<?php 

include '../controller/con_farm.php';


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../view/style.css">

	<title>ADD MORE INFO </title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">ADD MORE INFORMATION</p>
			<div class="input-group">
				<input type="text" placeholder="username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="farmertype" name="farmertype" value="<?php echo $farmertype; ?>" required>
			</div>
			<div class="input-group">
				<input type="number" placeholder="age" name="age" value="<?php echo $age; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="location" name="location" value="<?php echo $location; ?>" required>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">ADD INFO </button>
			</div>
			
		</form>
	</div>
</body>
</html>