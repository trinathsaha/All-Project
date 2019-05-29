<?php 
session_start();
$username = "";
$Emailaddress = "";
$password = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'doctorpatient');



if(isset($_POST['signup'])){
		
		$username = mysql_real_escape_string($_POST['username']);
		$Mobilenumber = mysql_real_escape_string($_POST['mobilenumber']);
		$Address = mysql_real_escape_string($_POST['address']);
		$Emailaddress = mysql_real_escape_string($_POST['emailaddress']);
		$password = mysql_real_escape_string($_POST['password']);

		if(empty($username)){
			array_push($errors, "username is required");
		}

		
		if(empty($Emailaddress)){
			array_push($errors, "E-mail Address is required");
		}


		if(empty($password)){
			array_push($errors, "password is required");
		}

		if(count($errors) == 0){
			$password = md5($password);
			$sql = "INSERT INTO user(username,mobilenumber,address,emailaddress,password) VALUES (
			'$username','$Mobilenumber','$Address','$Emailaddress','$password')";

			mysqli_query($db, $sql);
			
			$_SESSION['username'] = $username;
			
			$_SESSION['success'] = "you are now a user of doctor patient portal System";
			header('location: login.php'); //redirect to the home page;
		}




}
	if(isset($_POST['login'])){

		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		if(empty($username)){
			array_push($errors, "username is required");
		}
				
		if(empty($password)){
			array_push($errors, "password is required");
		}

		if(count($errors) == 0){
			$password = md5($password);
			$query = "SELECT * FROM user WHERE user.username= '$username' AND user.password= '$password'";
			$result = mysqli_query($db, $query);

			if(mysqli_num_rows($result) == 1){

					$_SESSION['username'] = $username;
				
					$_SESSION['success'] = "";
					header('location: patienthome.php'); //redirect to the home page;
			}
				
			else{

				array_push($errors,"wrong username and password combination");
				//header('location: login.php');
			}
		}
	}

	
	if (isset($_GET['logout'])){

		session_destroy();
		unset($_SESSION['username']);
		header('location: aftersignup.php');
	}

	
			
?>



