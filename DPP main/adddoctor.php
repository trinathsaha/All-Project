<?php include ('adminhome.php'); ?>

<?php include ('adddoctorconnect.php'); ?>



<!DOCTYPE html>
<html>
<head>
	<title> Doctor Patient Portal</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>

	<?php header("adminhome.php")

	 ?>
	 </br>
	 <p>
	 <form  action="adddoctor.php" method = "post" enctype = "multipart/form-data"> 
	 	
	 	<?php include ('errors.php'); ?>
	 	<label> Doctor Name </label>
	 	<input type="text" name="doctorname" placeholder="Doctor Name" value - "<?php echo $doctorname; ?>" ></br>
	 
	 	</br>
	 	<label> Username </label>
	 	<input type="text" name="username" placeholder="username" value - "<?php echo $username; ?>" > </br>
	
		</br>
	 	<label> E-mail Address </label>
	 	<input type="E-mail" name="emailaddress" placeholder="E-mail Address" value - "<?php echo $emailaddress; ?>"> </br>
	 
	 	</br>
	 	<label> Mobile number </label>
	 	<input type="tel" name="mobilenumber" placeholder="Mobile number" value - "<?php echo $mobilenumber; ?>"> </br>
		</br>
	 	 	
	 	<label> Password </label>
	 	<input type="Password" name="password" placeholder="Password" value - "<?php echo $password; ?>"> </br>
		</br>

	 	<label> Confirm Password </label>
	 	<input type="Password" name="Confirm Password" placeholder="Confirm Password"> </br>
		</br>
	 	<button type ="submit" name ="confirm" class="btn"> Confirm </button>
	 	<t><button type ="submit" name ="Cancel" class="btn"> Cancel </button></t>
	 </form>
	
	</p>

</body>
</html>