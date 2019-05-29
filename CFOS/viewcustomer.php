
<!-- Have to apply PHP part -->
<?php include('loginconnect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin to Customer Profile </title>
</head>
<body>
	<table border="1" align="center" width="90%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">
					<nav align="right">

						
						<button type="button" onclick="location.href='Admin_to_customer_view.php'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='A_viewadmin.html'"><font color="red" size="4em" /><b/>Profile</button>
						<!-- <button type="button" onclick="location.href='A_customerinfo.html'"><font color="red" size="4em" /><b/>Customer Info</button><!-- Changes will apply here -->
						
						<button type="button" onclick="location.href='orderinfo.php'"><font color="red" size="4em" /><b/>Order Info</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='admin.php'"><font color="red" size="4em" /><b/>Log Out</button><!-- Changes will apply here -->
					</nav>
			</td>
		</tr>
		<tr>
			<!-- Changes will apply here -->
<!--<tr align="left" >
			<td></td>
			<td colspan="2">
				<nav>
					<button type="button" onclick="location.href='S_home.html'">Home</button>
					<button type="button" onclick="location.href='S_profile.html'">Profile</button>
					<button type="button" onclick="location.href='S_job_offer.html'">Job Offers</button>
					<button type="button" onclick="location.href='login.html'">Log Out</button>
					
				</nav>
			</td>
		</tr>-->
			<td valign="top" width="25%">
				<fieldset>
					<legend>
				<font size="6em" color="#F78541">
					
				<b/><span>view profile</span>
				</font></legend>
				<br><br>
				<ul>
				    
					<span><a href="viewcustomer.php"style="text-decoration:none"><font color="teal" size="5em" />View Customer</a></span>
					<hr width="150" align="left" size="5">
					<span><a href="A_viewCustomer.html"style="text-decoration:none"><font color="teal" size="5em" />Delete account</a></span>
					<hr width="150" align="left" size="5">
				</ul>
			</fieldset>
			</td>
			<td valign="top" height="350" align="center">
				<table>
					<tr>
						<td>
							</fieldset>
			</td>
			<td valign="top" height="350" align="center">
				<table>
					<tr>
						<td>
							<fieldset>
					<legend>
						<h2><font color="teal"/>
							
						</h2>
					</legend>


<?php 
	
 $db = mysqli_connect('localhost', 'root', '', 'cfos');
 $sql = "SELECT * FROM user";
 $query = mysqli_query($db,$sql); 
 ?> 
 <form action="viewcustomer.php" method = post>
 <table border="1" align="center" style="background-color: white; text-align: center;">
 <tr>
 <th> Name </th>
 
 <th> Email </th>
<th> Password </th>
<th> Contact Number </th>
<th> Address </th>
<th> Age </th>
<th> Update </th>

 
 
 </tr>
 </form>


 <?php

 if(mysqli_num_rows($query) > 0){
 	while($record = mysqli_fetch_array($query)){
 	?>

 	<tr>
 		<td> <?php echo $record["username"]; ?> </td>
 		<td> <?php echo $record["email"]; ?> </td>
 		<td> <?php echo $record["password"]; ?> </td>
 		<td> <?php echo $record["contact_number"]; ?> </td>
 		<td> <?php echo $record["address"]; ?> </td>
 		<td> <?php echo $record["age"]; ?> </td>
 		<td> <button> edit</button> <button> Delete</button> </td>
 		

 	</tr>

 	<?php

 	}
 }

 	?>

 	</table>

			
				
                    
				
</body>
</html>