
<!-- Have to apply PHP part -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Profile</title>
</head>
<body>
	<table border="1" align="center" width="100%" height="100%" cellspacing="0" bgcolor="#0F1F3A">
		<tr align="left">
			<td colspan="2">

					<nav align="right">

						<button type="button" onclick="location.href='A_home.html'"><font color="red" size="4em" /><b/>Home</button>
						<button type="button" onclick="location.href='A_profile.html'"><font color="red" size="4em" /><b/>Profile</button>
						<button type="button" onclick="location.href='A_customerinfo.html'"><font color="red" size="4em" /><b/>Customer Info</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='A_employeeinfo.html'"><font color="red" size="4em" /><b/>Employee Info</button><!-- Changes will apply here -->
						<button type="button" onclick="location.href='homepage.html'"><font color="red" size="4em" /><b/>Log Out</button><!-- Changes will apply here -->
					
					</nav>
			</td>
		</tr>
		<tr>
			<!-- Changes will apply here -->
			
			<td valign="top" width="25%">
				<fieldset>
					<legend>
				<font size="5em" color="#F78541">
					
				<b/> ADMIN PROFILE
				</font></legend>
				<br><br>
				<ul>
					<hr>
					
					<li type="square"><a href="A_viewadmin.html"><font color="teal" size="4em" />View Admin</a></li><hr>
					<li type="square"><a href="A_addadmin.html"><font color="teal" size="4em" />Add Admin</a></li><hr>

					<br><br>
					
				</ul>
			</fieldset>
			</td>
			<td valign="top" height="350" align="center">
				<table>
					<tr>
						<td>
							<fieldset>
					<legend>
						<h2><font color="teal"/>
							VIEW Admin
						</h2>
					</legend>


								<table>
									<tr>
										<td width="500">
											<span><font color="white" size="3em" />Name</span>
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbspJerin Akter<?php echo $name?>

											 <button type="button" onclick="location.href='Admin_to_customer_view.html'"><font color="red" size="4em" /><b/>View</button>
											  <button type="button" onclick="location.href=''"><font color="red" size="4em" /><b/>Remove</button>
											</form>




											<br><br>
											<hr>
											
										</td>
										<td width="300" align="center" valign="top">
											<!--<img src=<?php echo $image ?> alt="" width="150" height="200">-->
											<img src="img/hijab.png" width="250" height="250">
											<br>
											<a href=""><font color="teal" size="4em">Change</font></a>
										</td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="right">
				<td colspan="2">
					<h5 align="center">
						<font color="white">
							<button type="button" onclick="location.href='https://www.facebook.com'"><img src="img/facebook.jpg" width="30px" height="30px"></button>
				<button type="twitter.jpg" onclick="location.href='https://twitter.com'"><img src="img/twitter.jpg" width="30px" height="30px"></button>
    					</font>
					</h5>
				</td>
			</tr>
	</table>
</body>
</html>