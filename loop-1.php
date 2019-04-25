<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Date of Birth 
		<select>
			<option>Day</option>
			<?php for($i=1;$i<=31;$i++) { ?>
			<option><?php echo $i; ?></option>
			<?php } ?>
		</select>
		<select>
			<option>Month</option>
			<option>?</option>
		</select>
		<select>
			<option>Year</option>
			<option>?</option>
		</select>
</body>
</html>