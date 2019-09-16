<?php
$con=mysqli_connect('localhost','root','','dummy');		
$result=mysqli_query($con,"select * from student");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<a href="insert.php">Add New Student</a>

	<table border="1" width="500px">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Course</td>
			<td>Fees</td>
			<td>Command</td>
		</tr>
		<?php while($record=mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?php echo $record['id']; ?></td>
			<td><?php echo $record['name']; ?></td>
			<td><?php echo $record['course']; ?></td>
			<td><?php echo $record['fees']; ?></td>
			<td>
				<a href="delete.php?id=<?php echo $record['id']; ?>">Delete</a>
				<a href="update.php?id=<?php echo $record['id']; ?>">Update</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
