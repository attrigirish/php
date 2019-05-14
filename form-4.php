<?php

//State Management : Retaining Fields data across post back events.


$error=["name"=>"","gender"=>"","skills"=>"","city"=>""];

$name="";
$gender="";
$skills=array();
$city="";

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
	else
	{
		$name=$_POST['name'];
	}


	//Radio Button
	if(!isset($_POST['gender']))
	{
		$error["gender"]="Gender is required";
	}
	else
	{
		$gender=$_POST['gender'];
	}


	//Checkbox
	if(!isset($_POST['skills']))
	{
		$error["skills"]="Atleast 1 Skill is required"; 
	}
	else
	{
		$skills=$_POST['skills'];
	}


	//Drop Down List
	if($_POST['city']=='Select City')
	{
		$error["city"]='City is required';
	}
	else
	{
		$city=$_POST['city'];
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
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
				<td><?php echo $error['name']; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male" <?php echo ($gender=='Male')?'checked':''; ?>> Male 
					<input type="radio" name="gender" value="Female" <?php echo ($gender=='Female')?'checked':''; ?>> Female
				</td>
				<td><?php echo $error['gender']; ?></td>
			</tr>
			<tr>
				<td>Skills</td>
				<td>
					<input type="checkbox" name="skills[]" value="C" <?php echo (array_search('C', $skills)!==false)?'checked':''; ?>> C 
					<input type="checkbox" name="skills[]" value="C++" <?php echo (array_search('C++', $skills)!==false)?'checked':''; ?>> C++
					<input type="checkbox" name="skills[]" value="Python" <?php echo (array_search('Python', $skills)!==false)?'checked':''; ?>> Python
					<input type="checkbox" name="skills[]" value="PHP" <?php echo (array_search('PHP', $skills)!==false)?'checked':''; ?>> PHP
				</td>
				<td><?php echo $error['skills']; ?></td>
			</tr>
			<tr>
				<td>City</td>
				<td>
					<select name="city">
						<option>Select City</option>
						<option <?php echo $city=='New Delhi'?'selected':''; ?>>New Delhi</option>
						<option <?php echo $city=='Chennai'?'selected':''; ?>>Chennai</option>
						<option <?php echo $city=='Kolkata'?'selected':''; ?>>Kolkata</option>
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