<?php

//Nested Arrays - Associative Array in Indexed Array
$arr=array(
		array("name"=>"Girish Attri","phone"=>324423423,"email"=>"girish@mail.com"),
		array("name"=>"Anil Sharma","phone"=>342342344,"email"=>"anil@mail.com")
	);

//Accessing Single Element
//echo "Phone : " . $arr[1]["phone"];

//Iterating Array
foreach($arr as $persons)
{
	foreach($persons as $key=>$data){
		echo "$key = $data <br>";
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