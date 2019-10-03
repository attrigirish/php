<?php

include 'bl.php';

$posteddata=['name'=>'Galaxy S9','brand'=>'Samsung4','price'=>''];
$result=ValidateAddProductData($posteddata);
if($result===true)
{
	echo "Data Valid";
}
else
{
	var_dump($result);
}

?>