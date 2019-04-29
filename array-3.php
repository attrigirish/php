<?php
$cities=array("New Delhi","Chennai","Kolkata","Hyderabad","Chandigarh");
$usercity='Hyderabad';
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach($cities as $city) { ?>
	<input type="radio" name="city"> <?php echo $city; ?> <br>
	<?php } ?>
</body>
</html>