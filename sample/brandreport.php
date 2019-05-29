<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

	<?php  include ("afterlogin.php"); ?>
<?php  
	echo "</br>";
	header("afterlogin.php"); ?>
	<?php 
	
 $db = mysqli_connect('localhost', 'root', '', 'garmentsmanagement');
 $sql = "SELECT brandname,brandcompany,branddescription FROM brands group by brandname";
 $query = mysqli_query($db,$sql); 
 ?> 
 <form action="productreport.php" method = post>
 <table border="1" align="center" style="background-color: white; text-align: center;">
 <tr>
 <th> Brand Name </th>
 <th> Brand Company </th>
 <th> Brand Description</th>
 
 </tr>
 </form>


 <?php

 if(mysqli_num_rows($query) > 0){
 	while($record = mysqli_fetch_array($query)){
 	?>

 	<tr>
 		<td> <?php echo $record["brandname"]; ?> </td>
 		<td> <?php echo $record["brandcompany"]; ?> </td>
 		<td> <?php echo $record["branddescription"]; ?> </td>
 		

 	</tr>

 	<?php

 	}
 }

 	?>

 	</table>

 	
</body>
</html>

