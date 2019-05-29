<?php include ('template.php'); ?>
<?php include('adminconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin login page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
 
	<nav>
  <ul>
    
  </ul>
</nav>

 <div class="header">
	<h2> Admin Log In </h2>
		
	</div>
<form action="adminlogin.php" method="post">
	<?php include ('errors.php'); ?>
	<div class="input-group">
		<label> Admin Username</label>
		<input type="text" name="username" placeholder="Username"><br>
	</div>
		
	
	<div class="input-group">
		<label> Admin Password </label>
		<input type="password" name="password" placeholder="Password"><br>
	</div>

	<div class="input-group">
		
		<button type="submit" name = "login1" class="btn"> Log In </button>
	</div>
	<div>
		<p>
			Are you Admin?
		</p>
	</div>
	
</form>

</body>
</html>