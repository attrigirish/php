<?php 
$skills=array('C','C++','Java','Python','PHP');
$quals=array('BCA','MCA','BBA','MBA','BSC');

function Bind($arr)
{
	foreach($arr as $value)
	{
		echo "<option>$value</option>";
	}
}

?>

<html>
	<head>
	</head>

	<body>
		<select name="skills">
			<option>Select Skill</option>
			<?php Bind($skills); ?>
		</select>
		<select name="quals">
			<option>Select Qualifications</option>
			<?php Bind($quals); ?>
		</select>
	</body>
</html>