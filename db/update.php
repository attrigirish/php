<?php

$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','dummy');
$query="select * from student where id=$id";
$result=mysqli_query($con,$query);
$record=mysqli_fetch_assoc($result);

if(count($_POST)!=0)
{
	extract($_POST);

	$query="update student set name='$name', course='$course', fees=$fees where id=$id";
	$result=mysqli_query($con,$query);

	if($result!==false)
	{
		header('location:display.php');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Update Student Details</h1>
	<form method="post">
		Id : <input type="text" name="id" value="<?php echo $record['id']; ?>" readonly> <br>
		Name : <input type="text" name="name" value="<?php echo $record['name']; ?>"> <br>
		Course : <input type="text" name="course" value=<?php echo $record['course']; ?>> <br>
		Fees : <input type="text" name="fees" value="<?php echo $record['fees']; ?>"> <br>
		<input type="submit" value="Save">
	</form>
</body>
</html>