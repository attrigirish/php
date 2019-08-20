<?php 

$cities=array("UP"=>"Lucknow","Punjab"=>"Chandigarh","Haryana"=>"Chandigarh","MP"=>"Bhopal");


//Accessing the elements of an array
echo "<h1>Accessing the elements of an array</h1>";
echo $cities["UP"] . "<br>";
echo $cities["Punjab"] . "<br>";
echo $cities["Haryana"] . "<br>";
echo $cities["MP"] . "<br>";



//Accessing the elements of an array using foreach loop
echo "<h1>Accessing the elements of an array using foreach loop</h1>";
foreach($cities as $city){
	echo $city . "<br>";
}

//Accessing the elements of an array using foreach (key-value) loop
echo "<h1>Accessing the elements of an array using foreach loop</h1>";
foreach($cities as $state=>$city){
	echo "$state = $city <br>";
}



//Debugging/Inspecting an array
echo "<h1>Inspecting an Array</h1>";
print_r($cities);
//var_dump($cities);


//Adding an element in the array
$cities['Maharashtra']='Mumbai';
echo "<h1>After Insertion</h1>";
print_r($cities);


//Deleting an Element in the array
unset($cities["Haryana"]);
echo "<h1>After Deletion</h1>";
print_r($cities);

//Updating an Element in the array
$cities["MP"]='New City';
echo "<h1>After Updation</h1>";
print_r($cities);






?>