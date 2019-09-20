<?php

session_start();

$questions=[
	'Who is the prime minister of India?',
	'When was Article 370 removed from J&K?',
	'How many UT are there in India?',
	'Who was the first President of India?',
	'What is the name of lander sent along with Chandryan 2?'
];

$answers=[
	['Narendra Modi','Jawahar Lal Nehru','Rahul Gandhi','Manmohan Singh'],
	['2018','2019','2017','1990'],
	['5','7','9','8'],
	['Bhim Rao Ambedkar','Dr. Rajendra Prasad','Lord Mount Betton','Javahar Lal Nehru'],
	['Pragyan','Vikram','Mukesh','Sarabhai']
];

$correct_answers=['Narendra Modi','2019','9','Dr. Rajendra Prasad','Vikram'];


$_SESSION['questions']=$questions;
$_SESSION['answers']=$answers;
$_SESSION['correct_answers']=$correct_answers;
$_SESSION['result']=0;
$_SESSION['current']=0;




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		a{
			display: block;
			position: absolute;
			top:30%;
			left:40%;
			color:orange;
			font-size:26px;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<a href="exam.php">Start Exam</a>
</body>
</html>