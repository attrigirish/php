<?php 

include 'dl/dl.php';
$products=GetProducts();

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
			<h3><a href="addproduct.php">Add New Product</a></h3>
			<div class="col-md-12">
				<?php if($products==null) { ?>
				<h1>No Data Found</h1>
				<?php } else { ?>
				<table class="table table-bordered table-striped">
					<tr class="table-info">
						<td>PId</td>
						<td>Name</td>
						<td>Brand</td>
						<td>Price</td>
						<td>Photo</td>
						<td>Created On</td>
						<td>Updated On</td>
						<td>Command</td>
					</tr>
					<?php foreach($products as $product) { ?>
					<tr>
						<td><?php echo $product['pid']; ?></td>
						<td><?php echo $product['name']; ?></td>
						<td><?php echo $product['brand']; ?></td>
						<td><?php echo $product['price']; ?></td>
						<td><img style="width:100px;height:100px" src="<?php echo $product['photo']; ?>"></td>
						<td><?php echo $product['createdon']; ?></td>
						<td><?php echo $product['updatedon']; ?></td>
						<td><a href="deleteproduct.php?pid=<?php echo $product['pid']; ?>">Delete</a> | <a href="updateproduct.php?pid=<?php echo $product['pid']; ?>">Update</a></td>
					</tr>
					<?php } ?>
				</table>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>