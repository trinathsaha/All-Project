
<?php 

$productname = "";
$productmodel = "";
$productdescription = "";

$productprice = "";

$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'garmentsmanagement');




if(isset($_POST['submit'])){
		
		$productname = mysql_real_escape_string($_POST['productname']);
		$productmodel = mysql_real_escape_string($_POST['productmodel']);
		$productdescription = mysql_real_escape_string($_POST['productdescription']);
		
		$productprice = mysql_real_escape_string($_POST['productprice']);
		
		$target = "images/".basename($_FILES['image']['name']);





		$productimage = $_FILES["image"]["name"];
		//$productimagedata = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
		//$imagetype = mysql_real_escape_string($_FILES["image"]["type"]);

		if(empty($productname)){
			array_push($errors, "product name is required");
		}

		

		if(empty($productprice)){
			array_push($errors, "product price is required");
		}

		if(count($errors) == 0){
			
						
			   	$sql = "INSERT INTO product(productname,productmodel,productdescription,productprice) VALUES (
				'$productname','$productmodel','$productdescription','$productprice')";
				
				$sql1 = "INSERT INTO productimage (image,name) VALUES ('$productimage','$productdescription')";
				
				mysqli_query($db, $sql);
				mysqli_query($db, $sql1);

				if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
					echo "";
				}
				
							
			header('location: afterlogin.php');


		}

	}
	?>

