<?php

$con=mysqli_connect('localhost','root','','hitakshi');
$result=mysqli_query($con,"SELECT * FROM PRODUCT");

//var_dump($result);

//Fetch database Records
/*
while($record=mysqli_fetch_assoc($result))
{
	var_dump($record);
}
*/

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Products List</h1>
	<table border="1" width="500">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Brand</td>
			<td>Price</td>
			<td>Stock</td>
		</tr>		
		<?php while($record=mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?php echo $record['id']; ?></td>
			<td><?php echo $record['name']; ?></td>
			<td><?php echo $record['brand']; ?></td>
			<td><?php echo $record['price']; ?></td>
			<td><?php echo $record['stock']; ?></td>
		</tr>
		<?php } ?>
	</table>	
</body>
</html>