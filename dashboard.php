
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
require_once("adminnav.php"); 
require_once("php/connection.php");

?>
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2" style="margin-left: -30px;">
					<?php
					include("nav.php");
					?>

				</div>

				<div class="col-md-10">
					<h4 class="my-2">Admin Dashboard</h4>
					<div class="col-md-12 my-1">
						<div class="row">
							<div class="col-md-3 bg-success mx-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8">
											<?php
											$q = "SELECT * FROM staff";
											$res = mysqli_query($link,$q);
											$num = mysqli_num_rows($res);
											?>
											
											<h5 class="text-white px-3" style="font-size: 30px;"><?php echo $num; ?></h5>
											<h5 class="text-white px-3">Total</h5>
											<h5 class="text-white px-3">Staff</h5>
										</div>
										<div class="col-md-4">
											<a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 bg-info mx-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8">
										<?php
											
											$result= mysqli_query($link,"SELECT SUM(product_price) as investment FROM Producttb");
											$row = mysqli_fetch_assoc($result);
											$sum = $row['investment'];
											
										?>
											<h5 class="text-white" style="font-size: 30px;">Ksh. <?php echo $sum; ?></h5>
											<h5 class="text-white">Total Investment</h5>
											
										</div>
										<div class="col-md-4">
											<a href=""><i class="fa fa-money-check-alt fa-3x my-4" style="color: white;">	  </i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 bg-warning mx-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8">
											<h5 class="text-white px-3" style="font-size: 30px;">0</h5>
											<h5 class="text-white px-3">Total</h5>
											<h5 class="text-white px-3">Sales</h5>
										</div>
										<div class="col-md-4">
											<a href=""><i class="fa fa-procedures fa-3x my-4" style="color: white;">
											</i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8">
											<h5 class="text-white px-3" style="font-size: 30px;">0</h5>
											<h5 class="text-white px-3">Tota</h5>
											<h5 class="text-white px-3">Electronics</h5>
										</div>
										<div class="col-md-4">
											<a href=""><i class="fa fa-flag fa-3x my-4" style="color: white;">
											</i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8">
											<h5 class="text-white" style="font-size: 30px;">0</h5>
											<h5 class="text-white">Total</h5>
											<h5 class="text-white">Furniture</h5>
										</div>
										<div class="col-md-4">
											<a href=""><i class="fa fa-book-open fa-3x my-4" style="color: white;">
											</i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 bg-success mx-2 my-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-7">
											<h5 class="text-white px-3" style="font-size: 30px;">0</h5>
											<h5 class="text-white px-3">Total</h5>
											<h5 class="text-white px-3">Stationay</h5>
										</div>
										<div class="col-md-5">
											<a href=""><i class="fa fa-money-check-alt fa-3x my-4" style="color: white;">
											</i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>