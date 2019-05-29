
<?php include ('addproductconnect.php'); ?>

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
	 
	 
	 <form  action="addproduct.php" method = "post" enctype = "multipart/form-data"> 
	 	<?php include ('errors.php'); ?>
	 	
	 	<label> Product Name </label>
	 	<input type="text" name="productname" value - "<?php echo $productname; ?>" ></br>
	 
	 	
	 	<label> Product Brand </label>
	 	<input type="text" name="productmodel" value - "<?php echo $productmodel; ?>" > </br>
	
	
	 	<label> Product Description </label>
	 	<input type="text" name="productdescription"> </br>
	 
	 
	 	<label> Product Image </label>
	 	<input type="file" name="image"> </br>
	
	 
	 	<label> Product Price </label>
	 	<input type="text" name="productprice" value - "<?php echo $productprice; ?>" > </br>
	 
	 	<button type ="submit" name ="submit" class="btn"> Submit </button>
	 </form>
	


</body>
</html>