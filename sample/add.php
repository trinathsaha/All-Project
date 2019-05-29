<?php 

$username = "";
$Emailaddress = "";
$password = "";
$errors = array();


//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'garmentsmanagement');



if(isset($_POST['submit'])){
		
		$Productname = mysql_real_escape_string($_POST['Product Name']);
		$Productmodel = mysql_real_escape_string($_POST['Product Model']);
		$Address = mysql_real_escape_string($_POST['Product Description']);
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
			
			$_SESSION['success'] = "you are now a user of Garments management System";
			header('location: aftersignup.php'); //redirect to the home page;
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
					header('location: afterlogin.php'); //redirect to the home page;
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
		header('location: aftersignup.php');
	}

?>