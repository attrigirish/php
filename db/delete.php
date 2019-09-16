<?php

$id=$_GET["id"];

$con=mysqli_connect("localhost","root","","dummy");
$query="delete from student where id=$id";
$result=mysqli_query($con,$query);


header('location:display.php');

?>