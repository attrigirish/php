<?php

include 'dl/dl.php';
include 'bl/bl.php';

$pid=$_GET['pid'];


if(count($_POST)!=0)
{
	$result=ValidateProductData($_POST);
	if($result===true){
		extract($_POST);		
		$updatedon=date('y-m-d 12:00:00');
		$url=UploadFile($_FILES);
		$issaved=UpdateProduct($pid,$name,$brand,$price,$url,$updatedon);
	}
	else
	{
		$issaved=false;
	}
}

$product=GetProduct($pid);

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
				<?php if(count($_POST)!=0) { ?>
				<?php if($issaved==true) { ?>
				<div class="alert alert-primary" role="alert">
					Record Saved Successfully
				</div>
				<?php } else { ?>
				<div class="alert alert-danger" role="alert">
					Please Check for Errors
				</div>
				<?php } ?>
				<?php } ?>
				<form method="post" enctype="multipart/form-data">
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Name</label>
				    <div class="col-sm-10">
				     	<input type="text" class="form-control" name="name" value="<?php echo $product['name']; ?>"> 
				     	<small class="form-text text-muted"><?php echo @$result['name']; ?></small>	      
				    </div>
				     
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Brand</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="brand" value="<?php echo $product['brand']; ?>">
				      <small class="form-text text-muted"><?php echo @$result['brand']; ?></small>	
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Price</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="price" value="<?php echo $product['price']; ?>">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Photo</label>
				    <div class="col-sm-10">
				      <input type="file" class="form-control" name="photo">
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