<?php include ('template.php'); ?>
<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> SignUp page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
 
	<nav>
  <ul>
    
  </ul>
</nav>

 <div class="header">
	<h2> Sign Up </h2>
		
	</div>
<form method="post" action="signup.php" >
	<?php include ('errors.php'); ?>
	
	<div class="input-group">
		<label> Username</label>
		<input type="text" name="username" placeholder="username" value -"<?php echo $username; ?>"><br>
	</div>
	
	<div class="input-group">
		<label> Mobile Number</label>
		<input type="text" name="mobilenumber" placeholder="Mobile number"><br>
	</div>

	<div class="input-group">
		<label> Address </label>
		<input type="text" name="address" placeholder="Address"><br>
	</div>

	<div class="input-group">
		<label> E-mail Address </label>
		<input type="text" name="emailaddress" placeholder="E-mail Address" value -"<?php echo $Emailaddress; ?>"><br>
	</div>

	<div class="input-group">
		<label> Password </label>
		<input type="password" name="password" placeholder="Password" value - "<?php echo $password; ?>"><br>
	</div>

	<div class="input-group">
		
		<button type="submit" name = "signup" class="btn"> Sign Up </button>
	</div>
	<div>
		<p>
			Already a member? <a href="login.php"> Sign in </a>
		</p>
	</div>
	
</form>

</body>
</html>