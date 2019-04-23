<?php
$day=3;
$style="";

switch($day)
{
	case 1:
		$style='sunday';
		break;
	case 2:
		$style='monday';
		break;
	case 3:
		$style='tuesday';
		break;
	case 4:
		$style="wednesday";
		break;
	case 5:
		$style="thursday";
		break;
	case 6:
		$style="friday";
		break;
	case 7:
		$style="saturday";
		break;
	default:
		$style="";
		break;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="condition-2.css" rel="stylesheet">
</head>
<body class="<?php echo $style; ?>">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</body>
</html>