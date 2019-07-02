<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$id=$_POST['id'];
	$stock=$_POST['stock'];

	$con=mysqli_connect('localhost','root','','hitakshi');
	$result=mysqli_query($con,"UPDATE PRODUCT SET STOCK=$stock WHERE ID=$id");
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
		Id <input type="text" name="id"> <br>
		Stock <input type="text" name="stock"> <br>
		<input type="submit" value="Update">
	</table>
	</form>
</body>
</html>