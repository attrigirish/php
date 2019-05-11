<?php

//Form Validation

if(count($_POST)>0)
{
	//Validating Text Fields
	if(empty($_POST['name']))
	{
		echo "Name is required";
	}
	elseif(strlen($_POST['name'])<4) 
	{
		echo "Minimum 3 Characters are required";
	}
	elseif(preg_match('/[0-9]/', $_POST['name']))
	{
		echo "Name must contains alphabets only";
	}

	echo "<br>";

	//Radio Button
	if(!isset($_POST['gender']))
	{
		echo "Gender is required";
	}

	echo "<br>";

	//Checkbox
	if(!isset($_POST['skills']))
	{
		echo "Atleast 1 Skill is required"; 
	}

	echo "<br>";

	//Drop Down List
	if($_POST['city']=='Select City')
	{
		echo 'City is required';
	}

	echo "<br>";

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