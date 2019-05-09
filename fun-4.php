<?php

function CalAvg($arr)
{
	$sum=0;
	foreach($arr as $val)
	{
		$sum=$sum+$val;
	}
	$avg=$sum/count($arr);
	return $avg;
}

$data=array(46,65,78,56,34,66,87);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<?php foreach($data as $val) { ?>
			<tr>
				<td><?php echo $val; ?></td>
			</tr>
		<?php } ?>
			<tr>
				<td style="background-color:gray"><?php echo CalAvg($data); ?></td>
			</tr>
	</table>
</body>
</html>