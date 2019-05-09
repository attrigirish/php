<?php
include 'formlib.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<table border="1">
			<tr>
				<td>User Name</td>
				<td><?php Element('text','name'); ?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php Element('password','password'); ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php Element('radio','gender',array('Male','Female')); ?></td>
			</tr>
			<tr>
				<td>Skills</td>
				<td><?php Element('checkbox','skills',array('C','C++','Python','PHP','SQL'));  ?></td>
			</tr>			
			<tr>
				<td>City</td>
				<td><?php Element('select','city',array('Select City','New Delhi','Mumbai','Lucknow')); ?></td>
			</tr>
	</table>
	</form>
</body>
</html>