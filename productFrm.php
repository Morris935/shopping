<?php 


//require_once('./insert.php.php');


?>

<!DOCTYPEhtml>
<html lang='en'>
<head>
	<meta charset="UTF-8" />
	<meta name="viewpoint" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>Product Form</title>
	

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" />
</head>
<body class="bg-light">
	<?php
		require_once("nav.php");
	?>
	<div class="container">
		<div class="col-lg-4">
			<h2>Product Details Form</h2>
			<form method="post" action="insert.php">
				<div class="form-group">
					<label for="productname">Product Name:</label>
					<input type="text" class="form-control" placeholder="Enter Product name" id="productname" name="productname">
				</div>
				<br>
				<div class="form-group">
					<label for="productdescription">Product Description:</label>
					<input type="text" class="form-control" placeholder="Enter product description" id="productdescription" name="productdescription">
				</div>
				<br>
				<div class="form-group">
					<label for="category">Product Category:</label>
					<select name="category">
						<option  class="form-control" value="Select category" selected>Select category</option>
						<option class="form-control" value="Electronics">Electronics</option>
						<option class="form-control" value="Furniture">Furniture</option>
						<option class="form-control" value="Stationay">Stationay</option>
						<option class="form-control" value="Vehicle">Vehicle</option>
					</select>
				</div>
				<br>
				<div class="form-group">
					<label for="productprice">Product Price:</label>
					<input type="number" class="form-control" placeholder="Enter product price" id="productprice" name="productprice">
				</div>
				<br>
				<div class="form-group">
					<label for="quantity">Quantity:</label>
					<input type="number" class="form-control" placeholder="Enter quantity" id="quantity" name="quantity">
				</div>
				<br>
				<div class="form-group">
					<label for="productimage">Product Image:</label>
					<input type="text" class="form-control" placeholder="Enter Product image" id="productimage" name="productimage">
				</div>
				<br />
				<div>
					<button type="submit" class="btn btn-success" name="insert">Insert</button>
					
				</div>
			</form>
		</div>
	</div>
	<br />
	
	
	
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>