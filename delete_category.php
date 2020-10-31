<?php
	include('conn.php');

	$id = $_GET['category'];

	$sql="delete from category where categoryid='$id'";
	mysqli_query($conn,$sql);

	header('location:category.php');
?>