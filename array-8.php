<?php

//Indexed Array in Associative Array

$arr=array(
		"Haryana"=>array("Hisar","Rohtak","Chandigarh","Gurugram"),
		"UP"=>array("Lucknow","Ghaziabad","Faridabad")
	);

foreach($arr as $state=>$cities){
	echo "<h3>$state</h3>";
	foreach($cities as $city){
		echo "$city<br>";
	}
}

//Add 'Agra' city in UP
//Add new State 'Maharashtra' with following cities Mumbai, Satara, Baramati, Satara


$arr["UP"][]="Agra";
$arr["Maharashtra"]=array("Mumbai","Satara","Baramati","Satara");

echo "<pre>";
print_r($arr);
echo "</pre>";


//Associative Array in Associative Array

$arr=array(
		"Girish"=>array("course"=>"Java","fees"=>16000,"duration"=>"3 months"),
		"Ravi"=>array("course"=>"Python","fees"=>16000,"duration"=>"3 months")
	);

//Add a new student record

?>






