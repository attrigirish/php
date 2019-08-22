<?php

//Nested Arrays - Indexed Array in Indexed Array
$arr=array(
		array("Rohtak","Sonipat","Panipat","Gurugram"),
		array("Lucknow","Ghaziabad","Faridabad"),
		array("Pune","Panvel","Satara","Mumbai")
	);

//Accessing Single Element
//echo $arr[1][1];

//Iterating Array
foreach($arr as $cities)
{
	foreach($cities as $city){
		echo "$city <br>";
	}
	echo "<hr>";
}

/*

for($i=0;$i<count($arr);$i++){
	for($j=0;$j<count($arr[$i]);$j++){
		echo $arr[$i][$j];
	}
}

*/

?>