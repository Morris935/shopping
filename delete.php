<?php

$link = mysqli_connect("localhost","root","","Productdb") or die(mysqli_error($link));
$id = $_GET['id'];

if (mysqli_query($link, "DELETE FROM Producttb where id=$id")){
	echo "<script>alert(\"Deletion successful---!\")</script>";
	echo "<script>window.location=\"productFrm.php\" </script>";
}else{
	echo "<script>alert(\"Deletion  denied---!\")</script>";
	echo "<script>window.location=\"productFrm.php\" </script>";
}

?>
