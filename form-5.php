<?php

include 'formlib.php';

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
				<td><?php Element('text','name',$name); ?></td>
				<td><?php echo $error['name']; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<?php Element('radio','gender',array('Male','Female'), $gender); ?>					
				</td>
				<td><?php echo $error['gender']; ?></td>
			</tr>
			<tr>
				<td>Skills</td>
				<td>
					<?php Element('checkbox','skills[]',array('C','C++','PHP','Python'),$skills); ?>
				</td>
				<td><?php echo $error['skills']; ?></td>
			</tr>
			<tr>
				<td>City</td>
				<td>
					<?php Element('select','city',array('Select City','New Delhi','Chennai'),$city); ?>
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