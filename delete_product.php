<?php
	include('conn.php');

	$id = $_GET['product'];

	$sql="delete from product where productid='$id'";
	mysqli_query($conn,$sql);

	header('location:product.php');
?>