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

	 <form> 
	 	<label> Product Name </label>
	 	<input type="text" name="Product Name"></br>
	 	<label> Product Model </label>
	 	<input type="text" name="Product Model"> </br>
	 	<label> Product Description </label>
	 	<input type="text" name="Product Description"> </br>
	 	<label> Product Image </label>
	 	<input type="text" name="Product Image"> </br>
	 	<label> Product Price </label>
	 	<input type="text" name="Product Price"> </br>
	 	<button type ="submit" name ="submit " class="btn"> Submit </button>
	 </form>


</body>
</html>