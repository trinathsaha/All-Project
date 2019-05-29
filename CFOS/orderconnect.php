<?php 

$name = "";
$date = "";

$email = "";
$time = "";
$phone = "";
$menu = "";
$address = "";
$cardname = "";
$cardnumber = "";
$people = "";
$table_no = "";

$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cfos');




if(isset($_POST['order'])){
		
		$name = mysqli_real_escape_string($db,$_POST['name']);
		$date = mysqli_real_escape_string($db,$_POST['date']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$time = mysqli_real_escape_string($db,$_POST['time']);
		$phone = mysqli_real_escape_string($db,$_POST['phone']);
		$menu = mysqli_real_escape_string($db,$_POST['menu']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$cardname = mysqli_real_escape_string($db,$_POST['cardname']);
		$cardnumber = mysqli_real_escape_string($db,$_POST['cardnumber']);
		
		
		if(empty($name)){
			array_push($errors, "username is required");
		}

		
		if(empty($email)){
			array_push($errors, "E-mail Address is required");
		}


		if(empty($phone)){
			array_push($errors, "phone is required");
		}

		if(empty($address)){
			array_push($errors, "address is required");
		}

		if(count($errors) == 0){
		
			//$password = md5($password);
			$sql = "INSERT INTO food_order(name,date,email,time,phone,menu,address,cardname,cardnumber) VALUES (
			'$name','$date','$email','$time','$phone','$menu','$address','$cardname','$cardnumber')";

			mysqli_query($db, $sql);
			$_SESSION['success'] = "";
			header('location: afterlogin.php'); //redirect to the home page;
		}
	}


	if(isset($_POST['book'])){
		
		$name = mysqli_real_escape_string($db,$_POST['name']);
		$date = mysqli_real_escape_string($db,$_POST['date']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$time = mysqli_real_escape_string($db,$_POST['time']);
		$phone = mysqli_real_escape_string($db,$_POST['phone']);
		$people = mysqli_real_escape_string($db,$_POST['people']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$table_no = mysqli_real_escape_string($db,$_POST['table_no']);
		$message = mysqli_real_escape_string($db,$_POST['message']);
		
		
		if(empty($name)){
			array_push($errors, "username is required");
		}

		
		if(empty($email)){
			array_push($errors, "E-mail Address is required");
		}


		if(empty($phone)){
			array_push($errors, "phone is required");
		}

		if(empty($address)){
			array_push($errors, "address is required");
		}

		if(count($errors) == 0){
		
			//$password = md5($password);
			$sql = "INSERT INTO book_table(name,date,email,time,phone,people,address,table_no,message) VALUES (
			'$name','$date','$email','$time','$phone','$people','$address','$table_no','$message')";

			mysqli_query($db, $sql);
			$_SESSION['success'] = "";
			header('location: Admin_to_customer_view.php'); //redirect to the home page;
		}
	}