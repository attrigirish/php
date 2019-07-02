<?php

//Step 1 : Establishing a connection
$con=mysqli_connect('localhost','root','','hitakshi');

//Step 2 : Executing a command
$result=mysqli_query($con,"INSERT INTO PRODUCT VALUES(103,'GIONEE A1','GIONEE',23000,100)");

//Step 3 : Processing Result
if($result==1)
{
	echo "Record Saved Successfully";	
}
else
{
	echo "Command Failed!";
}

?>