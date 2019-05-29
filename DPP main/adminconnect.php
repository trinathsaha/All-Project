<?php 
session_start();
$username = "";
$password = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'doctorpatient');


	if(isset($_POST['login1'])){

		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		if(empty($username)){
			array_push($errors, "admin username is required");
		}
				
		if(empty($password)){
			array_push($errors, "admin password is required");
		}

		if(count($errors) == 0){
			$password = md5($password);
			$query = "SELECT * FROM creator WHERE creator.username= '$username' AND creator.password= '$password'";
			$result = mysqli_query($db, $query);
			
			
			

			if(mysqli_num_rows($result) == 1){

					$_SESSION['username'] = $username;
				
					$_SESSION['success'] = "";
					header('location: adminhome.php'); //redirect to the home page;
			}
				
			else{

				array_push($errors,"wrong username and password combination");
				header('location: ');
			}
		}
	}

	
	if (isset($_GET['logout'])){

		session_destroy();
		unset($_SESSION['username']);
		header('location: home.php');
	}

	
			
?>



