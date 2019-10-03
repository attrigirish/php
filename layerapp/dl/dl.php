<?php

$server='localhost';
$username='root';
$password='';
$dbname='dummy';


$con=mysqli_connect($server,$username,$password,$dbname);


/*

Common DL Functions

add
delete
update
get
gets
*/


function AddProduct($name,$brand,$price,$photo,$createdon)
{
	global $con;
	$query="INSERT INTO PRODUCTS(name,brand,price,photo,createdon) values('$name','$brand',$price,'$photo','$createdon')";
	$result=mysqli_query($con,$query);
	return $result===false?false:true;
}

function DeleteProduct($pid)
{
	global $con;
	$query="DELETE FROM PRODUCTS WHERE pid=$pid";
	$result=mysqli_query($con,$query);
	return $result===false?false:true;
}

function UpdateProduct($pid,$name,$brand,$price,$photo,$updatedon)
{
	global $con;
	$query="UPDATE PRODUCTS SET name='$name',brand='$brand',price=$price,photo='$photo',updatedon='$updatedon' WHERE pid=$pid";
	$result=mysqli_query($con,$query);
	return $result===false?false:true;
}

function GetProduct($pid)
{
	global $con;
	$query="SELECT * FROM PRODUCTS WHERE pid=$pid";
	$result=mysqli_query($con,$query);

	if(mysqli_num_rows($result)>0)
	{
		$record=mysqli_fetch_assoc($result);
		return $record;
	}
	else
	{
		return null;
	}
}

function GetProducts()
{
	global $con;
	$query="SELECT * FROM PRODUCTS";
	$result=mysqli_query($con,$query);

	$records=[];
	if(mysqli_num_rows($result)>0)
	{
		while($record=mysqli_fetch_assoc($result))
		{
			$records[]=$record;
		}
		return $records;
	}
	else
	{
		return null;
	}	
}


?>