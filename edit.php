<?php
 
session_start();

$link = mysqli_connect("localhost","root","","Productdb") or die(mysqli_error($link));
$id = $_GET['id'];

$productname="";
$productdescription="";
$category="";
$productprice="";
$quantity="";
$productimage="";

$sql = mysqli_query($link, "SELECT * FROM Producttb where id=$id");
while ($row = mysqli_fetch_array($sql)){
	$productname=$row['product_name'];
	$productdescription=$row['product_description'];
	$category=$row['category'];
	$productprice=$row['product_price'];
	$quantity=$row['quantity'];
	$productimage=$row['product_image'];
}
	

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
	require_once("nav.php") ;
	//include "header.php";
?>

	<div class="container">
		<div class="col-lg-4">
			<h2>Product Details Form</h2>
			<form method="post">
				<div class="form-group">
					<label for="productname">Product Name:</label>
					<input type="text" class="form-control" placeholder="Enter Product name" id="productname" name="productname" value="<?php echo $productname ?>">
				</div>
				<br>
				<div class="form-group">
					<label for="productdescription">Product Description:</label>
					<input type="text" class="form-control" placeholder="Enter product description" id="productdescription" name="productdescription" value="<?php echo $productdescription ?>">
				</div>
				<br>
				<div class="form-group">
					<label for="category">Product Category:</label>
					<select name="category">
						<option  class="form-control" value="<?php echo $category ?>" selected>Select category</option>
						<option class="form-control" value="Electronics">Electronics</option>
						<option class="form-control" value="Furniture">Furniture</option>
						<option class="form-control" value="Stationay">Stationay</option>
						<option class="form-control" value="Vehicle">Vehicle</option>
					</select>
				</div>
				<br>
				<div class="form-group">
					<label for="productprice">Product Price:</label>
					<input type="text" class="form-control" placeholder="Enter product price" id="productprice" name="productprice" value="<?php echo $productprice ?>">
				</div>
				<br>
				<div class="form-group">
					<label for="quantity">Quantity:</label>
					<input type="number" class="form-control" placeholder="Enter quantity" id="quantity" name="quantity" value="<?php echo $quantity ?>">
				</div>
				<br>
				<div class="form-group">
					<label for="productimage">Product Image:</label>
					<input type="text" class="form-control" placeholder="Enter Product image" id="productimage" name="productimage" value="<?php echo $productimage ?>">
				</div>
				<br />
				<div>
					<button type="submit" class="btn btn-warning" name="update">Update</button>
				</div>
			</form>
		</div>
	</div>
</body>
<?php 

//$link = mysqli_connect("localhost","root","","Productdb") or die(mysqli_error($link));
//$id = $_GET['id'];
if (isset($_POST['update'])){
	if (mysqli_query($link, "UPDATE Producttb SET product_name='$_POST[productname]', product_description='$_POST[productdescription]', 
		category='$_POST[category]',product_price=$_POST[productprice],quantity=$_POST[quantity], product_image='$_POST[productimage]' where id=$id")){
		echo "<script>alert(\"Updation successful---!\")</script>";
		echo "<script>window.location=\"productFrm.php\" </script>";
	}else{
		echo "<script>alert(\"Updation  denied---!\")</script>";
		echo "<script>window.location=\"productFrm.php\" </script>";
	}
}


?>