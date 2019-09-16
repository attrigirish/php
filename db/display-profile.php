<?php

$con=mysqli_connect('localhost','root','','dummy');
$query="select * from profile";
$result=mysqli_query($con,$query);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.box{
			width:240px;
			height:300px;
			border:1px solid black;
			margin:5px;
			padding:10px;
			box-sizing: border-box;
		}

		.box img{
			height:240px;
			width:100%;
		}

		.box h3{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php while($record=mysqli_fetch_assoc($result)) { ?>
	<div class="box">
		<img src="<?php echo $record['url']; ?>">
		<h3><?php echo $record['name']; ?></h3>
	</div>
	<?php } ?>
</body>
</html>