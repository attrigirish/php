<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$id=$_POST['id'];

	$con=mysqli_connect('localhost','root','','hitakshi');
	$result=mysqli_query($con,"DELETE FROM PRODUCT WHERE ID=$id");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		Product Id : <input type="text" name="id"> 
		<input type="submit" value="Delete">
	</form>
</body>
</html>