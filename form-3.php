<?php

//Form Validation
$error=["name"=>"","gender"=>"","skills"=>"","city"=>""];

if(count($_POST)>0)
{
	//Validating Text Fields
	if(empty($_POST['name']))
	{
		$error["name"]="Name is required";
	}
	elseif(strlen($_POST['name'])<4) 
	{
		$error["name"]="Minimum 3 Characters are required";
	}
	elseif(preg_match('/[0-9]/', $_POST['name']))
	{
		$error["name"]="Name must contains alphabets only";
	}


	//Radio Button
	if(!isset($_POST['gender']))
	{
		$error["gender"]="Gender is required";
	}


	//Checkbox
	if(!isset($_POST['skills']))
	{
		$error["skills"]="Atleast 1 Skill is required"; 
	}


	//Drop Down List
	if($_POST['city']=='Select City')
	{
		$error["city"]='City is required';
	}


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
				<td><?php echo $error['name']; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male"> Male 
					<input type="radio" name="gender" value="Female"> Female
				</td>
				<td><?php echo $error['gender']; ?></td>
			</tr>
			<tr>
				<td>Skills</td>
				<td>
					<input type="checkbox" name="skills[]" value="C"> C 
					<input type="checkbox" name="skills[]" value="C++"> C++
					<input type="checkbox" name="skills[]" value="Python"> Python
					<input type="checkbox" name="skills[]" value="PHP"> PHP
				</td>
				<td><?php echo $error['skills']; ?></td>
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
				<td><?php echo $error['city']; ?></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>