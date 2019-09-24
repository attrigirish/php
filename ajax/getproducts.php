<?php

/*
Create a table product
	- id
	- name
	- brand
	- price

*/

$q=$_GET['search'];
$con=mysqli_connect('localhost','root','','dummy');
$query="select * from products where name like '%$q%'";
$result=mysqli_query($con,$query);

$products=[];
while($product=mysqli_fetch_assoc($result))
{
	$products[]=$product;
}

echo json_encode($products);

?>