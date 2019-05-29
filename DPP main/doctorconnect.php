<?php 
session_start();
$username = "";
$password = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'doctorpatient');
if(isset($_POST['submit'])){

		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		if(empty($username)){
			array_push($errors, "username is required");
		}
				
		if(empty($password)){
			array_push($errors, "password is required");
		}

		if(count($errors) == 0){
			//$password = md5($password);
			$query = "SELECT * FROM adddoctor WHERE adddoctor.username= '$username' AND adddoctor.password= '$password'";
			$result = mysqli_query($db, $query);

			if(mysqli_num_rows($result) == 1){

					$_SESSION['username'] = $username;
				
					$_SESSION['success'] = "";
					header('location: doctorhome.php'); //redirect to the home page;
			}
				
			else{

				array_push($errors,"wrong username and password combination");
				//header('location: doctorlogin.php');
			}
		}
	}

	
	if (isset($_GET['logout'])){

		session_destroy();
		unset($_SESSION['username']);
		header('location: home.php');
	}

	
			
?>