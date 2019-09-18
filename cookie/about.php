<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#menu{
			width:100%;
			height:60px;
			background-color:orange;
		}

		#menu li{
			display:inline-block;
			height:60px;
			padding-left:30px; 
		}

		#menu #main-menu{
			float:left;
			height:60px;
			text-align: left;
		}

		#menu #login-menu{
			float:right;
			height:60px;
			text-align: right;
			margin-right:30px;
		}
	</style>
</head>
<body>
	<div id="menu">
		<div id="main-menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
		</div>
			<div id="login-menu">
			<ul>
				<?php if(!isset($_COOKIE['userid'])) { ?>
				<li><a href="">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<?php } else { ?>
				<li><a href="#">Welcome <?php echo $_COOKIE['userid']; ?></a></li>
				<li><a href="logout.php">Logout</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</body>
</html>