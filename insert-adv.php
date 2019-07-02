<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$brand=$_POST['brand'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];

	//Step 1 : Establishing a connection
	$con=mysqli_connect('localhost','root','','hitakshi');

	//Step 2 : Executing a command
	$result=mysqli_query($con,"INSERT INTO PRODUCT VALUES($id,'$name','$brand',$price,$quantity)");

	//Step 3 : Processing Result
	if($result==1)
	{
		echo "Record Saved Successfully";	
	}
	else
	{
		echo "Command Failed!";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" name="id">
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name">
			</tr>
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand">
			</tr>
			<tr>
				<td>price</td>
				<td><input type="text" name="price">
			</tr>
			<tr>
				<td>quantity</td>
				<td><input type="text" name="quantity">
			</tr>
			<tr>
				<td></td>
				<td><input type="submit">
			</tr>			
		</table>
	</form>
</body>
</html>