<?php

session_start();


require_once('php/CreateDb.php');
require_once('php/component.php');


$db = new CreateDb("Productdb","Producttb");

if (isset($_POST['remove'])){
	if ($_GET['action']=='remove'){
		foreach ($_SESSION['cart'] as $key=>$value){
			if ($value['product_id']==$_GET['id']){
				unset($_SESSION['cart'][$key]);
				echo "<script>alert('Product has been removed...!') </script>";
				echo "<script>window.location = 'cart.php' </script>";
			}
		}
	}
}

?>

<!DOCTYPEhtml>
<html lang='en'>
<head>
	<meta charset="UTF-8" />
	<meta name="viewpoint" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>My Cart</title>
	

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" />
</head>
<body class="bg-light">

	<?php
		require_once('header.php');
	?>
	
	<div class="container-fluid"> 
		<div class="row px-5"> 
		
			<div class="col-md-7"> 
				<div class="shopping-cart">
					<h6>My Cart </h6>
					<hr>
					
					<?php
						$total = 0;
						if (isset($_SESSION['cart'])){
							$product_id = array_column($_SESSION['cart'],'product_id');
							$result = $db->getData();
							
							while ($row = mysqli_fetch_assoc($result)){
								foreach ($product_id as $id){
									if ($row['id'] == $id){
										cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
										$total = $total + (int)$row['product_price'];
									}
								}
							}
						}else{
							echo "<h5>Cart is empty.</h5>";
						}
					
					?>
					
				</div>
			</div>
			
			<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25"> 
				<div class="pt-4">
					<h6>PRICE DETAILS </h6>
					<hr>
					<div class="row price-details">
						<div class="col-md-6">
							<?php 
								
								if (isset($_SESSION['cart'])){
									$count = count($_SESSION['cart']);
									echo "<h6>Price ($count items) </h6>";
								}else{
									echo "<h6>Price (0 items)</h6>";
								}
							?>
							<h6>Delivery Charges</h6>
							<hr>
							<h6>Amount Payable</h6>
						</div>
						<div class="col-md-6"> 
							<h6>Ksh. <?php echo $total; ?></h6>
							<h6 class="text-success">Ksh.100 </h6>
							<hr>
							<h6> Ksh.
								<?php echo $total + 100; ?>
							</h6>
						</div>
					</div>
				
   				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>