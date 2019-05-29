
<?php 
include('errors.php');
session_start();

$username = "";
$email = "";
$password = "";
$contact_number = "";
$address = "";
$age = "";
$admin_id = "";

$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cfos');




if(isset($_POST['signup'])){
		
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$contact_number = mysqli_real_escape_string($db,$_POST['contact_number']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$age = mysqli_real_escape_string($db,$_POST['age']);
		
		
		if(empty($username)){
			array_push($errors, "username is required");
		}

		
		if(empty($email)){
			array_push($errors, "E-mail Address is required");
		}


		if(empty($password)){
			array_push($errors, "password is required");
		}

		if(count($errors) == 0){
		
			//$password = md5($password);
			$sql = "INSERT INTO user(username,email,password,contact_number,address,age) VALUES (
			'$username','$email','$password','$contact_number','$address','$age')";

			mysqli_query($db, $sql);
			
			$_SESSION['username'] = $username;
			
			$_SESSION['success'] = "you are now a user of doctor patient portal System";
			header('location: afterlogin.php'); //redirect to the home page;
		}




}
	if(isset($_POST['login'])){

		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

		if(empty($username)){
			array_push($errors, "username is required");
		}
				
		if(empty($password)){
			array_push($errors, "password is required");
		}

		if(count($errors) == 0){
			//$password = md5($password);
			$query = "SELECT * FROM user WHERE username= '$username' AND password= '$password'";
			$result = mysqli_query($db, $query);

			if(mysqli_num_rows($result) >= 1){

					$_SESSION['username'] = $username;

				
					$_SESSION['success'] = "";
					header('location: afterlogin.php');
						
			}
				
			else{

				array_push($errors,"wrong username and password combination");
				header('location: login.php');
			}
		}
	}

	
	if (isset($_GET['logout'])){

		session_destroy();
		unset($_SESSION['username']);
		mysql_close($db);
		header('location: index.php');
	}

	
			
			if(isset($_POST['adminlogin'])){
				$username = mysqli_real_escape_string($db,$_POST['username']);
				$password = mysqli_real_escape_string($db,$_POST['password']);
		
		if(empty($username)){
			array_push($errors, "username is required");
		}
				
		if(empty($password)){
			array_push($errors, "password is required");
		}

		if(count($errors) == 0){
			//$password = md5($password);
			$query = "SELECT * FROM admin WHERE username= '$username' AND password= '$password'";
			$result = mysqli_query($db, $query);

			if(mysqli_num_rows($result) >= 1){

					$_SESSION['username'] = $username;
					$_SESSION['admin_id'] = $admin_id;
				
					$_SESSION['success'] = "";
					header('location: Admin_to_customer_view.php');
						
			}
				
			else{

				array_push($errors,"wrong username and password combination");
				header('location: admin.php');
			}
		}
	}
?>





