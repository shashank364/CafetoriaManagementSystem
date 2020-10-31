<?php
$conn = new mysqli('localhost', 'root', '', 'foodsys');
session_start();
$username= "";
$email= "";
$errors=array();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['register']))
	{
		$username=mysqli_real_escape_string($conn,$_POST['username']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$address=mysqli_real_escape_string($conn,$_POST['address']);
		$phno=mysqli_real_escape_string($conn,$_POST['phno']);
		$password_1=mysqli_real_escape_string($conn,$_POST['password_1']);
		$password_2=mysqli_real_escape_string($conn,$_POST['password_2']);
 
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		if(empty($email)){
			array_push($errors,"Email is required");
		}
		if(empty($address)){
			array_push($errors,"Address is required");
		}
		if(empty($phno)){
			array_push($errors,"Phone Number is required");
		}
		if(empty($password_1)){
			array_push($errors,"Password is required");
		}
		if($password_1 != $password_2){
			array_push($errors,"password and confrimed password did not match");
		}
		if (count($errors)== 0) {
			$password=md5($password_1);//password encryption
			$sql="INSERT INTO `user` (`username`, `email`,`address`,`phno`, `password`) VALUES ('$username', '$email','$address','$phno','$password')";
			$don=mysqli_query($conn, $sql);
			if($don){
				$_SESSION['username']=$email;
			// $_SESSION['email']=$email;
			// $_SESSION['password_1']=$password_1;
			$_SESSION['success']="You are now logged in";
			header('location: login.php');
			}
			else{
				array_push($errors,"Register unsuccessfull try again ");

			}
			
		}


    }
      if(isset($_POST['login'])){
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$password_1=mysqli_real_escape_string($conn,$_POST['password']);
		if(empty($email)){
			array_push($errors,"Email is required");
		}
		if(empty($password_1)){
			array_push($errors,"Password is required");
		}
		if(count($errors)==0){
			$password=md5($password_1);	
			$check=mysqli_query($conn,"SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'");
			if(mysqli_num_rows($check)==1){
				$_SESSION['username']="$email";
				$_SESSION['success']="You are now logged in";
				header('location: home.php');

			}
			else{
				array_push($errors,"Email or Password Does not Match");
			}
		}
	}
	// else{
		if(isset($_POST['login'])){
			if($_POST['email']=='admin@gmail.com'){
				if($_POST['password']=='admin123')
				{
					$_SESSION['admi']='admin@gmail.com';
					header('location:index.php');
				}
			}
		}
	// }
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['email']);
		header('location:login.php');
	}
	if(isset($_POST['ip'])){
		$id=$_POST['ip'];
		$row=mysqli_query($conn,"SELECT status FROM `purchase` WHERE purchaseid=$id ");
		$rows=mysqli_fetch_array($row);
		if($rows['status']!="ORDER PLACED"){
			$updateip=mysqli_query($conn, "UPDATE purchase set status='IN PROGRESS' WHERE purchaseid=$id ");
		}
		  else{ ?>
		<script>
			window.alert('Order is already Placed');
			window.location.href='sales.php';
		</script>
		  <?php 
		  }
		  } 
	if(isset($_POST['op'])){
		$id=$_POST['op'];
		$updateip=mysqli_query($conn, "UPDATE purchase set status='ORDER PLACED' WHERE purchaseid=$id ");
		// header('location:sales.php');
	}
	if(isset($_POST['del'])){
		$id=$_POST['del'];
	  $row=mysqli_query($conn,"SELECT status FROM `purchase` WHERE purchaseid=$id ");
	  $rows=mysqli_fetch_array($row);
	  if($rows['status']=="ORDER AWAITING"){ ?>
	<script>
			window.alert('Your order is cancelled, Payment will be refunded back');
			window.location.href='use_sale.php';
		</script>
	  <?php
		mysqli_query($conn, "DELETE FROM purchase WHERE purchaseid=$id ");
		}
		else{ ?>
			<script>
			window.alert('You Cannot cancel your order Right now');
			window.location.href='use_sale.php';
		</script>
		<?php 
		}
		}
		if(isset($_POST['pay'])){ ?>
			<script>
			window.alert('Your Order is Booked');
			window.location.href='use_sale.php';
		</script>
		<?php }
		if(isset($_POST['rem'])){ 
				$id=$_POST['rem'];
			  $row=mysqli_query($conn,"SELECT purchaseid FROM `purchase` WHERE purchaseid=$id ");
			  $rows=mysqli_fetch_array($row);
			   ?>
			<!-- <script>
					window.alert('Your Payment will be refunded back');
					window.location.href='use_sale.php';
				</script> -->
			  <?php
				mysqli_query($conn, "DELETE FROM purchase WHERE purchaseid=$id ");
				
			?>
		<script>
			window.alert('Your order is cancelled');
			window.location.href='use_ord.php';
		</script>
		<?php 
		}
		?>
