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

	<div class="col-lg-12">
	
		<div class="row">
			<h1 class="px-5 navbar-brand text-align-center"><u>Stock Table</u></h1>
		<div>
	
		
		<div class="row">
			<div class="col-md-12">
				<a href="productFrm.php" class="nav-item nav-link " >
					<h3 class="px-5 navbar-brand">Add Stock <i class="fas fa-plus navbar-brand"> </i> </h3>
				</a>
			</div>
		</div>
		<div class="row">
			&nbsp;
		</div>
		
		<table class="table table-bordered"> 
			<caption>Product Table</caption> 
			<thead> 
				<tr> <th>ID</th> <th>Product Name</th> <th>Product Description</th> <th>Category</th> <th>Price</th> <th>Quantity</th> <th>Product Image</th> <th>Action</th></tr> 
			</thead> 
			<tbody> 
				<?php
					$con = $link = mysqli_connect("localhost","root","","Productdb") or die(mysqli_error($link));
					$view = mysqli_query($con, "SELECT * FROM Producttb");
					while ($row =mysqli_fetch_array($view)){
						echo "<tr>";
						echo "<td>"; echo $row['id']; echo "</td>";
						echo "<td>"; echo $row['product_name']; echo "</td>";
						echo "<td>"; echo $row['product_description']; echo "</td>";
						echo "<td>"; echo $row['category']; echo "</td>";
						echo "<td>"; echo "Ksh. ".$row['product_price']; echo "</td>";
						echo "<td>"; echo $row['quantity']; echo "</td>";
						echo "<td>"; echo $row['product_image']; echo "</td>";
						echo "<td>"; 
							?> <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning" type="button">Edit </button></a>
							<a href="delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger" type="button">Delete </button></a> <?php  
						echo "</td>";
						echo "</tr>";
					}
				?>
			</tbody> 
		</table>
	</div>
	
</body>
</html>