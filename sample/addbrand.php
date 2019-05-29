
<?php include ('addbrandconnect.php'); ?>

<?php include 'afterlogin.php' ?>


<!DOCTYPE html>
<html>
<head>
	<title> Garments management system </title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>

	<?php header("afterlogin.php")

	 ?>
	 </br>
	 </br>
	 
	 <form  action="addbrand.php" method = "post" enctype = "multipart/form-data"> 
	 	<?php include ('errors.php'); ?>
	 	
	 	<label> Brand Name </label>
	 	<input type="text" name="brandname" value - "<?php echo $brandname; ?>" ></br>
	 
	 	
	 	<label> Brand Company </label>
	 	<input type="text" name="brandcompany" value - "<?php echo $brandcompany; ?>" > </br>
	
	
	 	<label> Brand Description </label>
	 	<input type="text" name="branddescription"> </br>
	  
	 		 
	 	<button type ="submit" name ="submit" class="btn"> Submit </button>
	 </form>
	


</body>
</html>