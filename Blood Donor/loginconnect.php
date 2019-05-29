
<?php 

session_start();
$name = "";
$address = "";
$sex = "";
$subdiv = "";
$last_don_d = "";
$age = "";
$email = "";
$bg = "";
$password = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'blood_donor');





if(isset($_POST['signup'])){
		
		$name = mysqli_real_escape_string($db,$_POST['name']);
		$age = mysqli_real_escape_string($db,$_POST['age']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$sex = mysqli_real_escape_string($db,$_POST['sex']);
		$subdiv = mysqli_real_escape_string($db,$_POST['subdiv']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$bg = mysqli_real_escape_string($db,$_POST['bg']);
		$last_don_d = mysqli_real_escape_string($db,$_POST['last_don_d']);
		
		
		if(empty($name)){
			array_push($errors, "username is required");
		}

		
		if(empty($age)){
			array_push($errors, "Age is required");
		}

		if(empty($email)){
			array_push($errors, "Email Address is required");
		}


		if(empty($subdiv)){
			array_push($errors, "subdiv is required");
		}

		if(empty($password)){
			array_push($errors, "password is required");
		}

		if(empty($bg)){
			array_push($errors, "blood group is required");
		}

		if(count($errors) == 0){
		
			//$password = md5($password);
			$sql = "INSERT INTO user(name,age,address,sex,subdiv,password,email,bg,last_don_d) VALUES (
			'$name','$age','$address','$sex','$subdiv','$password','$email','$bg','$last_don_d')";

			mysqli_query($db, $sql);
			
			$_SESSION['name'] = $name;
			$_SESSION['password'] = $password;
			$_SESSION['bg'] = $bg;
			
			$_SESSION['success'] = "you are now a user of doctor patient portal System";
			header('location: afterlogin.php'); //redirect to the home page;
		}




}
	if(isset($_POST['login'])){

		$name = mysqli_real_escape_string($db,$_POST['name']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

		if(empty($name)){
			array_push($errors, "username is required");
		}
				
		if(empty($password)){
			array_push($errors, "password is required");
		}

		if(count($errors) == 0){
			//$password = md5($password);
			$query = "SELECT * FROM user WHERE name= '$name' AND password= '$password'";
			$result = mysqli_query($db, $query);

			if(mysqli_num_rows($result) == 1){

					$_SESSION['name'] = $name;
					$_SESSION['password'] = $password;
					$_SESSION['bg'] = $bg;

				
					$_SESSION['success'] = "";
					header('location: afterlogin.php');
						
			}
				
			else{

				array_push($errors,"wrong username and password combination");
				header('location: login.php');
			}
		}
	}

	if (isset($_GET['unregister'])){

		$sql = "DELETE * FROM user WHERE name = '$name'";
		$result = mysqli_query($db, $sql);
		session_destroy();
		unset($_SESSION['name']);
		mysql_close($db);
		header('location: index.php');
	}	
				
?>





