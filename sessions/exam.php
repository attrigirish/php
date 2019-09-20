<?php

session_start();

$current=$_SESSION['current'];

if(count($_POST)!=0)
{	
	extract($_POST);

	$correct_answer=$_SESSION['correct_answers'][$current];
	if($correct_answer==$answer){
		$_SESSION['result']=$_SESSION['result']+1;
	}



	if($command=='Previous'){
		$current--;
	}
	else if($command=='Next'){
		$current++;
	}
	else{
		header('location:result.php');
	}
}




$question=$_SESSION['questions'][$current];
$answers=$_SESSION['answers'][$current];



$_SESSION['current']=$current;

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
	<h1>Q. <?php echo $question; ?></h1>

	<?php foreach($answers as $answer) { ?>
	<p><input type="radio" name="answer" value="<?php echo $answer; ?>"> <?php echo $answer; ?></p>
	<?php } ?>


	<?php if($current!=0) { ?>
	<input type="submit" name="command" value="Previous">
	<?php } ?>
	<?php if($current!=4) { ?>
	<input type="submit" name="command" value="Next">
	<?php } ?>
	<?php if($current==4) { ?>
	<input type="submit" name="command" value="Submit">
	<?php } ?>
	</form>
</body>
</html>