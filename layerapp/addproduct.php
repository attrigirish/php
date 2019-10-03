<?php

include 'dl/dl.php';
include 'bl/bl.php';

if(count($_POST)!=0)
{
	$result=ValidateAddProductData($_POST);
	if($result===true){
		extract($_POST);		
		$createdon=date('y-m-d 12:00:00');
		if(AddProduct($name,$brand,$price,$photo,$createdon))
		{
			echo "Record Saved Successfully";
		}
		else
		{
			echo "Record Saved Failed";
		}
	}
	else
	{
		var_dump($result);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'includes/styles.php'; ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form method="post">
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="name">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Brand</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="brand">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Price</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="price">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Photo</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="photo">
				    </div>
				  </div>
				  <div class="form-group row">				    
				    <div class="col-sm-2 offset-sm-4">
				      <input type="submit" class="btn btn-primary">
				    </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>