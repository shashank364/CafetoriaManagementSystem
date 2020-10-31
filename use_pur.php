<?php
	include('conn.php');
	if(isset($_SESSION['username'])){
	if(isset($_POST['productid'])){ 
		$email=$_SESSION['username'];
		$sql="INSERT into `purchase` (`email`, `date_purchase`, `status`) values('$email', NOW(),'ORDER AWAITING')";
		mysqli_query($conn,$sql);
		$pid=$conn->insert_id;
 
		$total=0;
 
		foreach($_POST['productid'] as $product):
		$proinfo=explode("||",$product);
		$productid=$proinfo[0];
		$iterate=$proinfo[1];
		$sql="select * from product where productid='$productid'";;
		$query=$conn->query($sql);
		$row=$query->fetch_array();
 
		if (isset($_POST['quantity_'.$iterate])){
			$subt=$row['price']*$_POST['quantity_'.$iterate];
			$total+=$subt;

			$sql="insert into purchase_detail (purchaseid, productid, quantity) values ('$pid', '$productid', '".$_POST['quantity_'.$iterate]."')";
			$conn->query($sql);
		}
		endforeach;
 		
 		$sql="update purchase set total='$total' where purchaseid='$pid'";
 		$conn->query($sql);
		header('location:payment.php');		
	}
	else{
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='use_ord.php';
		</script>
		<?php
	}
?>
<?php    }
			else{
				header("location:login.php");
			} ?>