
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
				<?php 
	
 $db = mysqli_connect('localhost', 'root', '', 'cfos');
 $sql = "SELECT * FROM food_order";
 $query = mysqli_query($db,$sql); 
 ?> 


 <?php

 if(mysqli_num_rows($query) > 0){
 	while($record = mysqli_fetch_array($query)){
 	?>
				<table>
					<tr>
						<td>
							<fieldset>
					<legend>
						<h2><font color="teal"/>
							
						</h2>
					</legend>




 	<form>
								<table>
                                    
									<tr>
										<td width="500">
                                            
                                            <button><font color="red" size="4em" />BASIC INFO</button>
 											<br>
 											<br>
											<br>
                                            
                                            <table>
                                            
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" /> Customer Name :</span></td>
											<td style="text-align:left; padding:6px"> <?php echo $record["name"]; ?>



											</tr>
                                                
                                                
                                             <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Customer ID :</span></td>
											<td style="text-align:left; padding:6px"><?php echo $record["order_id"]; ?>
											</tr> 
											
                                           <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />E-mail :</span></td>
											<td style="text-align:left; padding:6px"><?php echo $record["email"]; ?>
											</tr>
                                                   
                                            
                                                
                                                
                                                
                                                  
                                           <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Booked Table no:</span></td>
											<td style="text-align:left; padding:6px">XX
											</tr>    
                                             
                                                
                                                
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Odered food:</span></td>
											<td style="text-align:left; padding:6px"><?php echo $record["menu"]; ?>
											</tr>
                                                
                                                
                                            <tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Phone number of Customer</span></td>
											<td style="text-align:left; padding:6px"><?php echo $record["phone"]; ?>
											</tr>   

											<tr>
                                                
                                            <td style="text-align:left; padding:6px" ><span><font color="white" size="5em" />Customer Address</span></td>
											<td style="text-align:left; padding:6px"><?php echo $record["address"]; ?>
											</tr> 
   
                                            <tr>
                                             
                                       
                                                
                                            <td>      <br><br><br><br> 
                                                <button><font color="red" size="4em" />More INFO</button>
                                                  <br><br>
                                                </td>
                                            <td></td>

                                            <td>      <br><br><br><br> 
                                                <button><font color="red" size="4em" />Payment information</button>
                                                  <br><br>
                                                </td>
                                            <td></td>
                                                
                                            </table>
                                            
                                            
 											 </td>	

											
											

											

											
											
											




 											
                                           
											
											



                                       
										
										<td width="300" align="center" valign="top">
											<img src="img/hijab.png" width="60%" >
											<!--<img src=<?php echo $image ?> alt="" width="150" height="200">-->
											<br>
											<br>
											
										</td>
									</tr>
                                    
                                    
                                    
                                    
                                    <tr>
                                    <td></td>
                                   
                                       
                                    
                                    
                                    </tr>
								</table>
                                </form>
							</fieldset>
						</td>
					</tr>
                    
				</table>

 	<?php

 	}
 }

 	?>

 	</table>

			
				
                    
				
</body>
</html>