<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" width="300px">
		<tr>
			<td>Id</td>
			<td>Name</td>
		</tr>
		<?php for($i=1;$i<=10;$i++) { ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>Dummy</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>