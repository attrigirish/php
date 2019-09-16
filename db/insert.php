<?php

if(count($_POST)!=0)
{

//Step 1 : Establishing Database connection
$con=mysqli_connect('localhost','root','','dummy');

//Step 2 : Check for successful connection
if($con===false)
{
	echo "Connection Cannot be established";
	die();
}

//Step 3 : Executing SQL Command

$id=$_POST['id'];
$name=$_POST['name'];
$course=$_POST['course'];
$fees=$_POST['fees'];

$result=mysqli_query($con,"INSERT INTO STUDENT VALUES($id,'$name','$course',$fees)");

if($result==true)
{
	header('location:display.php');
}
else
{
	echo "Record Insertion Failed";
}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Add New Student</h1>
	<form method="post">
		Id : <input type="text" name="id"> <br>
		Name : <input type="text" name="name"> <br>
		Course : <input type="text" name="course"> <br>
		Fees : <input type="text" name="fees"> <br>
		<input type="submit" value="Save">
	</form>
</body>
</html>