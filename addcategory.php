<?php
	include('conn.php');

	$cname=$_POST['cname'];

	$sql="insert into category (catname) values ('$cname')";
	mysqli_query($conn,$sql);

	header('location:category.php');

?>