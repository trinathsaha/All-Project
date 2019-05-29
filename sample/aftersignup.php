
<?php include ('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8_unicode_ci">
	<title> Garments Management System </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2> Garments Management System  </h2>
		
	</div>
		<div class = "content">
			<?php if (isset($_SESSION['success'])): ?>
				<div class = "error success">
					<h3> 
						<?php 
							echo $_SESSION['success'];
							unset($_SESSION['success']);
				?>
			</h3>
				</div>

			<?php endif ?>
	
	
		<?php 
			if(isset($_SESSION['username'])):?>
			<p> Welcome <strong> <?php echo $_SESSION['username']; ?> </strong> </p>
			<p>  <a href ="aftersignup.php?logout ='1'" style = "color: red;"> Logout </a> </p>

		<?php endif ?>

	
	</div>

</body>
</html>