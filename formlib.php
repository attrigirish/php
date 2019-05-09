<?php

function Element($type,$name,$value='',$default='')
{
	if($type=='select')
	{
		echo "<select name=$name>";
		foreach($value as $v)
		{
			if($v==$default)
				echo "<option selected>$v</option>";
			else
				echo "<option>$v</option>";

		}
		echo "</select>";
	}
	elseif ($type=="radio") 
	{
		foreach($value as $v)
		{
			if($v==$default)
				echo "<input type='radio' name='$name' value='$v' checked> $v";
			else
				echo "<input type='radio' name='$name' value='$v'> $v";
		}		
	}
	elseif ($type=="checkbox")
	{
		foreach($value as $v)
		{

			if($default!='' && array_search($v,$default)!==false)
				echo "<input type='checkbox' name='$name' value='$v' checked> $v";
			else
				echo "<input type='checkbox' name='$name' value='$v'> $v";				
		}				
	}
	else
	{
		echo "<input type='$type' name='$name' value='$value'>";
	}
}






?>