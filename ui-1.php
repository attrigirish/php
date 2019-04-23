<?php

$id=1;
$name='Ankit Kumar';
$course='ACCP';
$fees=75000;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#profile{
			padding:20px;
			background-color:lightgray;
			color:black;
		}
	</style>
</head>
<body>
	<div id="profile">
		ID : <?php echo $id; ?> <br>
		Name : <?php echo $name; ?> <br>
		Course : <?php echo $course; ?> <br>
		Fees : <?php echo $fees; ?> <br>
	</div>
</body>
</html>