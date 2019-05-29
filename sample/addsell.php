<?php include 'afterlogin.php' ?>
<?php include ('addsellconnect.php'); ?>
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
	 <form method = "post" action = "addsell.php"> 
		<?php include ('errors.php'); ?>
	 	 <label > Sale Type </label>
		 <select name = "saletype">
		  <option value="T-shirt">T-shirt</option>
		  <option value="shirt">shirt</option>
		  <option value="jeans">jeans</option>
		  <option value="jacket">jacket</option>
		</select> </br>	 	
		<label> Sale Date </label>
	 	<input type="Date" name="saledate" "<?php echo $saledate; ?>"> </br>
	 	<label> Sale amount </label>
	 	<input type="number" name="saleamount" "<?php echo $saleamount; ?>"> </br>
	 	<label> Sale description </label>
	 	<input type="text" name="saledescription" "<?php echo $saledescription; ?>"> </br>
	 	
	 	<button type ="submit" name ="submit" class="btn"> Submit </button>
	 </form>


</body>
</html>