<?php

if(count($_POST)!=0)
{
	extract($_POST);			//name
	extract($_FILES);			//photo

	/*
	$photo['name'];
	$photo['tmp_name'];
	$photo['size'];
	$photo['type'];
	$photo['error'];
	*/

	$url=$photo['name'];

	$con=mysqli_connect('localhost','root','','dummy');
	$query="insert into profile (name,url) values('$name','$url')";
	$result=mysqli_query($con,$query);

	if($result!==false){		
		move_uploaded_file($photo['tmp_name'], $photo['name']);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Add New Profile</h1>
	<form method="post" enctype="multipart/form-data">
		Name : <input type="text" name="name"> <br>
		File : <input type="file" name="photo"> <br>
		<input type="submit" value="Add Profile">
	</form>
</body>
</html>