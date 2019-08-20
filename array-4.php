<?php
$cities=array("New Delhi","Mumbai","Chennai","Kolkata","Hyderabad","Kochi","Bengaluru");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Cities : 
		<?php foreach($cities as $city) { ?>
		<input type="radio"> <?php echo $city; ?>
		<?php } ?>
</body>
</html>