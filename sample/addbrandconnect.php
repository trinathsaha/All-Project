
<?php 

$brandname = "";
$brandcompany = "";
$branddescription = "";



$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'garmentsmanagement');




if(isset($_POST['submit'])){
		
		$brandname = mysql_real_escape_string($_POST['brandname']);
		$brandcompany = mysql_real_escape_string($_POST['brandcompany']);
		$branddescription = mysql_real_escape_string($_POST['branddescription']);
		
		
		
		

		if(empty($brandname)){
			array_push($errors, "brandname is required");
		}

		

		if(empty($brandcompany)){
			array_push($errors, "brandcompany is required");
		}

		if(count($errors) == 0){
			
						
			   	$sql = "INSERT INTO brands(brandname,brandcompany,branddescription) VALUES (
				'$brandname','$brandcompany','branddescription')";
				
				
				
				mysqli_query($db, $sql);
				

				
							
			header('location: afterlogin.php');


		}

	}
	?>

