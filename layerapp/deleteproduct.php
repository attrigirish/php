<?php 

include 'dl/dl.php';

$pid=$_GET['pid'];
$result=DeleteProduct($pid);

if($result>0){
	header('location:displayproducts.php');
}

?>