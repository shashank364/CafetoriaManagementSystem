<?php
	include('conn.php');

	$id=$_GET['category'];

	$cname=$_POST['cname'];

	$sql="update category set catname='$cname' where categoryid='$id'";
	mysqli_query($conn,$sql);

	header('location:category.php');
?>