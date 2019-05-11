<?php


if(count($_POST)>0)
{
	echo $_POST['name'] . "<br>";
	echo $_POST['gender'] . "<br>";
	foreach($_POST['skills'] as $skill)
	{
		echo $skill . " ";
	}
	echo "<br>";
	echo $_POST['city'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male"> Male 
					<input type="radio" name="gender" value="Female"> Female
				</td>
			</tr>
			<tr>
				<td>Skills</td>
				<td>
					<input type="checkbox" name="skills[]" value="C"> C 
					<input type="checkbox" name="skills[]" value="C++"> C++
					<input type="checkbox" name="skills[]" value="Python"> Python
					<input type="checkbox" name="skills[]" value="PHP"> PHP
				</td>
			</tr>
			<tr>
				<td>City</td>
				<td>
					<select name="city">
						<option>Select City</option>
						<option>New Delhi</option>
						<option>Chennai</option>
						<option>Kolkata</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>