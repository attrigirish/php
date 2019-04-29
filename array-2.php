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
	City : <select>
				<option>Select City</option>
				<?php foreach($cities as $city) { ?>
				<option <?php echo ($usercity==$city)?'selected':''; ?> ><?php echo $city; ?></option>
				<?php } ?>
			</select>
</body>
</html>