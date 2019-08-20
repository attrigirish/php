<?php 

$cities=array("New Delhi","Chennai","Kolkata","Mumbai","Hyderabad");


//Accessing the elements of an array
echo "<h1>Accessing the elements of an array</h1>";
echo $cities[0] . "<br>";
echo $cities[1] . "<br>";
echo $cities[2] . "<br>";
echo $cities[3] . "<br>";
echo $cities[4] . "<br>";


//Accessing the elements of an array using for loop
echo "<h1>Accessing the elements of an array using for loop</h1>";
for($i=0;$i<5;$i++){
	echo $cities[$i] . "<br>";
}

//Accessing the elements of an array using foreach loop
/*
foreach(array as iterator){
	
}
*/
echo "<h1>Accessing the elements of an array using foreach loop</h1>";
foreach($cities as $city){
	echo $city . "<br>";
}


//Debugging/Inspecting an array
echo "<h1>Inspecting an Array</h1>";
print_r($cities);
//var_dump($cities);


//Adding an element in the array
//$cities[10]='Lucknow';
$cities[]='Lucknow';			//Auto Indexing
echo "<h1>After Insertion</h1>";
print_r($cities);


//Deleting an Element in the array
unset($cities[2]);
echo "<h1>After Deletion</h1>";
print_r($cities);

//Updating an Element in the array
$cities[3]='New City';
echo "<h1>After Updation</h1>";
print_r($cities);






?>