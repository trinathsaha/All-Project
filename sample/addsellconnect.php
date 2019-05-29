
<?php 

$saletype = "";
$saledate = "";
$saleamount = "";
$saledescription = "";


$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'garmentsmanagement');




if(isset($_POST['submit'])){
		
		$saletype = mysql_real_escape_string($_POST['saletype']);
		$saledate = mysql_real_escape_string($_POST['saledate']);
		$saleamount = mysql_real_escape_string($_POST['saleamount']);
		$saledescription = mysql_real_escape_string($_POST['saledescription']);
		

		if(empty($saledate)){
			array_push($errors, "sale date is required");
		}

		

		if(empty($saleamount)){
			array_push($errors, "sale amount is required");
		}

		if(count($errors) == 0){
			
			$sql = "INSERT INTO sales(saleamount,saletype,saledate,saledescription) VALUES (
			'$saleamount','$saletype','$saledate','$saledescription')";

			mysqli_query($db, $sql);
			header('location: afterlogin.php');


		}

	}
	?>

