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
	
 $db = mysql_connect('localhost', 'root', '', 'garmentsmanagement');
 $sql = "SELECT * FROM product";
 $query = mysql_query($sql,$db);  
 echo "<table border=1>
 <tr>
 <th> product name </th>
 <th> product type </th>
 <th> Availaible product </th>
 <th> sell product </th>
 </tr>";

 while($record = mysql_fetch_array($query)){
 	echo "<form action =productreport.php method = post>";
	echo "<tr>";
 	echo "<td>" . "<input type =text name = productname value = " . $record['productname'] .  " </td>" ;
 	echo "<td>" . "<input type =text name = productprice value = " . $record['productprice'] .  " </td>" ;
 	echo "<td>" . "<input type =text name = productname value = " . $record['productname'] .  " </td>" ;
 	echo "<td>" . "<input type =text name = productname value = " . $record['productname'] .  " </td>" ;
	echo "</form>";
	
 	}

 	echo "</table>";

 	mysql_close($db);
 	?>

</body>
</html>




 
 

 	
 	

 	








