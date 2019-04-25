<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.widget-control{
			text-align: center;
			float:left;
		}
	</style>
</head>
<body>
	<?php for($i=1;$i<=10;$i++) { ?>
	<div class="widget-control">
		<input type="radio">
		<br>
		<?php echo $i; ?>
	</div>
	<?php } ?>
</body>
</html>