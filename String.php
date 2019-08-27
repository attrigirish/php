<?php

/*
strcmp
*/

/*
$result=strcmp("Anil","Amit");
if(strcmp($data,$input)==0)
{
	echo "Equal";
}
else
{
	echo "Not Equal";
}
*/


/*
strstr
*/

$url="www.mysite.com/myfolder/myfile.txt";
echo strpos($url,"/") . "<br>";
echo strrpos($url,"/") . "<br>";



$url="www.mysite.com/myfolder/myfile.txt";
$folder=substr($url,14+1,23-14-1);
echo $folder . "<br>";	

$url="www.mysite.com/myfolder/myfile.txt";
echo strstr($url,"/") . "<br>";	


/*
OTP
*/
//$str="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$str="0123456789";
$otp=substr(str_shuffle($str),0,6);
echo $otp . "<br>";

/*
MD5
*/
$password="p@ssw0rd";
$hash=md5($password);
echo $hash;

?>