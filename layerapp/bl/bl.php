<?php

function ValidateProductData($posteddata)
{
	extract($posteddata);

	$errors=[];

	if(empty($name))
	{
		$errors['name']='Name cannot be empty';
	}

	if(empty($brand))
	{
		$errors['brand']='Brand cannot be empty';
	}
	elseif(preg_match('/[0-9]/',$brand))
	{
		$errors['brand']='Brand cannot contain a number';
	}

	if(count($errors)!=0)
	{
		return $errors;
	}
	else
	{
		return true;
	}
}

function UploadFile($filedata)
{
	extract($filedata);
	$filename=$photo['name'];
	$tempname=$photo['tmp_name'];

	$url='uploads/' . $filename;

	move_uploaded_file($tempname, $url);
	return $url;
}

?>