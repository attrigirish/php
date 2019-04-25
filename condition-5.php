<?php
$gender='female';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<input type='radio' value='male' name='gender' <?php echo ($gender=='male')?'checked':''; ?>> Male
		<input type='radio' value='female' name='gender' <?php echo ($gender=='female')?'checked':''; ?>> Female
</body>
</html>