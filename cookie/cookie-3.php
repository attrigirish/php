<?php
	
if(count($_POST)!=0)
{
	extract($_POST);
	setcookie('city',$city,time()+60*60*24);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(isset($_COOKIE['city'])===false) { ?>
	<div>
	<form method="post">
		City : <input type="text" name="city"><input type="submit">
	</form>
	</div>
	<?php } else { ?>
	<div>
		We've found your saved information : <?php echo $_COOKIE['city']; ?>
	</div>
	<?php } ?>
</body>
</html>