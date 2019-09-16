<?php
$con=mysqli_connect('localhost','root','','dummy');		
$result=mysqli_query($con,"select * from student");
if($result===false)
{
	echo "Please Try Again!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.student
		{
			border:1px solid black;
			padding:20px;		
			width:200px;		
			float:left;
			margin:20px;
		}
	</style>
</head>
<body>

	<?php while($record=mysqli_fetch_assoc($result)) { ?>
	<div class="student">
		ID : <b><?php echo $record['id']; ?></b> <br>
		Name : <b><?php echo $record['name']; ?></b> <br>
		Course : <b><?php echo $record['course']; ?></b> <br>
		Fees : <b><?php echo $record['fees']; ?></b> <br>
		<a href="delete.php?id=<?php echo $record['id']; ?>">Delete</a>
		<a href="update.php?id=<?php echo $record['id']; ?>">Update</a>
	</div>
	<?php } ?>

</body>
</html>

