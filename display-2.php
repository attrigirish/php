<?php

$con=mysqli_connect('localhost','root','','hitakshi');
$result=mysqli_query($con,"SELECT * FROM PRODUCT");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.box
		{
			width:240px;
			height: 300px;
			border:1px solid orange;
			float:left;
			margin:10px;
			padding: 10px;
		}

		.box img
		{
			display: block;
			height:180px;
			width:240px;
		}
	</style>
</head>
<body>
	<?php while($record=mysqli_fetch_assoc($result)) { ?>
	<div class="box">
		<h3><?php echo $record['name']; ?></h3>
		<img src="">
		<h5><?php echo $record['price']; ?></h5>
	</div>
	<?php } ?>
</body>
</html>