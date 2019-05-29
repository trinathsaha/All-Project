<?php include ('template.php'); ?>
<?php include('doctorconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Doctor login page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
 
	<nav>
  <ul>
    
  </ul>
</nav>

 <div class="header">
	<h2> Doctor Log In </h2>
		
	</div>
<form action="doctorlogin.php" method="post">
	<?php include ('errors.php'); ?>
	<div class="input-group">
		<label> Doctor Username</label>
		<input type="text" name="username" placeholder="DoctorUsername" value - "<?php echo $username; ?>"><br>
	</div>
		
	
	<div class="input-group">
		<label> Doctor Password </label>
		<input type="password" name="password" placeholder="DoctorPassword"  value - "<?php echo $password; ?>"><br>
	</div>

	<div class="input-group">
		
		<button type="submit" name = "submit" class="btn"> Log In </button>
	</div>
	<div>
		<p>
			Are you Registered Doctor?
		</p>
	</div>
	
</form>

</body>
</html>