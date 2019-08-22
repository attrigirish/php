<?php

$cities=array("UP"=>"Lucknow","Punjab"=>"Chandigarh","Haryana"=>"Chandigarh","MP"=>"Bhopal");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<td>State</td>
			<td>Capital</td>
		</tr>
		<?php foreach($cities as $state=>$city) { ?>
		<tr>
			<td><?php echo $state; ?></td>
			<td><?php echo $city; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>