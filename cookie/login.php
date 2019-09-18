<?php

if(count($_POST)!=0)
{
	extract($_POST);

	if(empty($userid))
	{
		echo "User id is required";
	}
	else
	{
		setcookie('userid',$userid,time()+60*60);
		header('location:home.php');
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#login-form{
			height:30%;
			width:40%;
			left:30%;
			top:35%;
			position: absolute;
			background-color:orange;
		}
	</style>
</head>
<body>
	<div id="login-form">
		<form method="post">
			User Id <br>
			<input type="text" name="userid">
			<br>
			<br>

			Password <br>
			<input type="password" name="password">
			<br>
			<br>

			<input type="submit" value="Login">


		</form>
	</div>
</body>
</html>