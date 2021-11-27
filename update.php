<?php 

$link = mysqli_connect("localhost","root","","Productdb") or die(mysqli_error($link));
$id = $_GET['id'];

if (mysqli_query($link, "UPDATE Producttb SET product_price=$_POST[productprice] where id=$id")){
	echo "<script>alert(\"Updation successful---!\")</script>";
	echo "<script>window.location=\"productFrm.php\" </script>";
}else{
	echo "<script>alert(\"Updation  denied---!\")</script>";
	echo "<script>window.location=\"productFrm.php\" </script>";
}

?>