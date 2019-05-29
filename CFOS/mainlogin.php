
<?php include('loginconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> login page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
 
	<nav>
  <ul>
    
  </ul>
</nav>

 <div class="header">
	<h2> Log In </h2>
		
	</div>
<form action="login.php" method="post">
	<?php include ('errors.php'); ?>
	<div class="input-group">
		<label> Username</label>
		<input type="text" name="username" placeholder="Username"><br>
	</div>
		
	
	<div class="input-group">
		<label> Password </label>
		<input type="password" name="password" placeholder="Password"><br>
	</div>

	<div class="input-group">
		
		<button type="submit" name = "login" class="btn"> Log In </button>
	</div>
	<div>
		<p>
			Not yet a Member? <a href="signup.php"> Sign Up </a>
		</p>
	</div>
	
</form>

</body>
</html>