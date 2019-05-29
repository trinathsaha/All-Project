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
 $sql = "SELECT saledate,saletype,saleamount,count(sale_id),saledescription FROM sales group by saledate,saletype";
 $query = mysqli_query($db,$sql); 
 ?> 
 <form action="productreport.php" method = post>
 <table border="1" align="center" style="background-color: white; text-align: center;">
 <tr>
 <th> Sale date </th>
 <th> Sale type </th>
 <th> Sale amount</th>
 <th> Num of sell </th>
 <th> Sell Description </th>
 </tr>
 </form>


 <?php

 if(mysqli_num_rows($query) > 0){
 	while($record = mysqli_fetch_array($query)){
 	?>

 	<tr>
 		<td> <?php echo $record["saledate"]; ?> </td>
 		<td> <?php echo $record["saletype"]; ?> </td>
 		<td> <?php echo $record["saleamount"]; ?> </td>
 		<td> <?php echo $record["count(sale_id)"]; ?> </td>
 		<td> <?php echo $record["saledescription"]; ?> </td>

 	</tr>

 	<?php

 	}
 }

 	?>

 	</table>

 	
</body>
</html>

