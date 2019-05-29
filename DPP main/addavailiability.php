<?php include ('doctorhome.php'); ?>





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
	 <form  action="addqualification.php" method = "post" enctype = "multipart/form-data"> 
	 	
	 	
	 	<label> Specialist type </label>
	 	<select name="Specialist type">
  		<option value="Dermatologist">Dermatologist</option>
  		<option value="Medicine">Medicine</option>
  		<option value="Nurologist">Nurologist</option>
  		<option value="Arthopedology">Arthopedology</option>
  		<option value="Gynocologist">Gynocologist</option>
		</select></br>
	 
	 	</br>
	 	<label> Description</label>
	 	<input type="text" name="description" placeholder="description" value - "" > </br>
	
		</br>
	 	<button type ="submit" name ="confirm" class="btn"> Confirm </button>
	 	<t><button type ="submit" name ="Cancel" class="btn"> Cancel </button></t>
	 </form>
	
	</p>

</body>
</html>