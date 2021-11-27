<?php
	$link = mysqli_connect("localhost","root","","Productdb") or die(mysqli_error($link));
	//mysqli_select_db($link,"Productdb") or die(mysqli_error($link));
	$id = $_GET['id'];
	
	$productname = $_POST['productname'];
	$productdescription = $_POST['productdescription'];
	$category = $_POST['category'];
	$productprice = $_POST['productprice'];
	$quantity = $_POST['quantity'];
	$productimage = $_POST['productimage'];
	
	if (isset($_POST["insert"])){
		$sql = "INSERT INTO Producttb(product_name,product_description,category,product_price,quantity,product_image) 
		VALUES('$productname','$productdescription','$category',$productprice,$quantity,'$productimage')";
		
		if (mysqli_query($link, $sql)){
			echo "<script>alert(\"insertion successful---!\")</script>";
			echo "<script>window.location=\"productFrm.php\" </script>";
		}else{
			echo "<script>alert(\"Error to execute sql---!\")</script>";
			echo "<script>window.location=\"productFrm.php\" </script>";
		}
	}
	
	
	
	

?>