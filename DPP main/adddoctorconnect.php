
<?php 

$doctorname = "";
$username = "";
$emailaddress = "";
$mobilenumber = "";
$password = "";

$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'doctorpatient');




if(isset($_POST['confirm'])){
		
		$doctorname = mysql_real_escape_string($_POST['doctorname']);
		$username = mysql_real_escape_string($_POST['username']);
		$emailaddress = mysql_real_escape_string($_POST['emailaddress']);
		
		$mobilenumber = mysql_real_escape_string($_POST['mobilenumber']);
		$password = mysql_real_escape_string($_POST['password']);
		
		





		
		if(empty($doctorname)){
			array_push($errors, "Doctor name is required");
		}

		if(empty($username)){
			array_push($errors, "username is required");
		}

		if(empty($mobilenumber)){
			array_push($errors, "mobilenumber is required");
		}
		

		if(empty($password)){
			array_push($errors, "password is required");
		}

		if(count($errors) == 0){
			
						
			   	$sql = "INSERT INTO adddoctor(doctorname,username,email,mobilenumber,password) VALUES (
				'$doctorname','$username','$emailaddress','$mobilenumber','$password')";
				
				
				
				mysqli_query($db, $sql);
				

				
				
							
			header('location: adminhome.php');


		}

	}
	?>

