<?php

$arr=array(54,76,34,76,98,23,50);

//Printing Array Elements
echo "<h1>Printing Array Elements</h1>";
echo $arr[0] . "<br>";
echo $arr[1] . "<br>";
echo $arr[2] . "<br>";
echo $arr[3] . "<br>";
echo $arr[4] . "<br>";
echo $arr[5] . "<br>";
echo $arr[6] . "<br>";


//Printing (Iterating) Array Elements using for Loop
echo "<h1>Printing (Iterating) Array Elements using for Loop</h1>";
for($i=0;$i<count($arr);$i++)
{
	echo $arr[$i] . "<br>";
}

//Printing (Iterating) Array Elements using foreach loop
echo "Printing (Iterating) Array Elements using foreach loop";
foreach($arr as $item)
{
	echo $item . "<br>";
}


?>