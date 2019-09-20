<?php

session_start();
$result=$_SESSION['result'];
session_destroy();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Your Final Score is <?php echo $result; ?></h1>
</body>
</html>