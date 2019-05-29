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
 $sql = "SELECT productname,productprice,count(productid)  FROM product group by productname,productprice";
 $query = mysqli_query($db,$sql); 
 ?> 
 <form>
 <table border="1" align="center" style="background-color: white; text-align: center;">
 <tr>
 <th> product name </th>
 <th> product price </th>
 <th> Availaible product </th>
 <th> sell product </th>
 </tr>
 </form>


 <?php

 if(mysqli_num_rows($query) > 0){
 	while($record = mysqli_fetch_array($query)){
 	?>

 	<tr>
 		<td> <?php echo $record["productname"]; ?> </td>
 		<td> <?php echo $record["productprice"]; ?> </td>
 		<td> <?php echo $record["count(productid)"]; ?> </td>

 	</tr>

 	<?php

 	}
 }

 	?>

 	</table>

 	
</body>
</html>

