<?php include('conn.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registeration</title>
    <!-- <link rel="stylesheet" type="text/css" href="user.css"> -->
    <style>
        @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
	font-size: 120%;
	background: url("img/reg.jpg");
	
	background-repeat: no-repeat;
	background-size: cover;
	/* background-position:; */

	/* background-image: url("bck.jpg"); */
}
h2{
	text-align: left;
	font-size: 3em;
	margin: 10px auto;
	color: black;
	letter-spacing: 0.2rem;
	padding-bottom: 0px;
}
a{
	color: white;
}
form{
	width: 30%;
	margin:2% auto;
	padding: 20px ;
	/* border: 1px solid #b0c4de; */
	background:none;
	border-radius: 10px ;
	color: rgb(250, 248, 245);
	font-weight: 100;
	position:absolute;
	top:-3%;
	left:8%;
}
input{
	background: none;
	color: rgba(0 0 0 1);
}
.input_group{
	margin: 10px 0px 10px 0px;
}
/* .input_group label{
	display: block;
	text-align: left;
	margin: 3px;
	color:black;
	padding: 8px 0px;
	border-bottom:1px solid black;
} */
.input_group input{
	height:30px;
	width: 100%;
	/* padding: 8px 0; */
	overflow:hidden;
	font-size: 16px;
	border-bottom: 1px solid black;
	/* margin:8px 0; */
	border-top:none;
	border-left:none;
	border-right:none;
	outline:none;
	background:none;	
	/* border: 1px solid grey; */
	/* outline:none;
	background:none;
	margin-bottom:5px; */
}
.input_group i{
	width:26px;
	float:left;
	text-align:centre;
	color:black;
}
.btn{
	padding: 10px;
	font-size: 15px;
	color:white;
	background: #5f9ea0;
	border:none;
	border-radius: 5px;
}
.error{
	width:92%;
	margin: 0px auto;
	padding: 10px;
	border:1px solid #b10f0d;
	color: white;
	background: none;
	border-radius: 5px;
	text-align: left;
}
p,a{
    color:black;
}


        </style>
</head>
<body>
	<!-- <div class="header">
		<h2>Register</h2>
	</div> -->
	<!-- <img  src="img/logo.jpg" height="25%"width="25%" style="position:absolute;top:1%;left:70%;"> -->
	<form method="post" action="register.php" autocomplete="off">
	<h2>Register</h2>
		<?php include('errors.php'); ?>
		<div class="input_group">
            <!-- <label>Username</label> -->
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
			<input type="text" name="username" placeholder="enter your name" title="" value="<?php echo $username; ?>">
		</div>
		<div class="input_group">
            <!-- <label>Email</label> -->
            <i class="fa fa-envelope" aria-hidden="true"></i>
			<input type="Email" name="email"  placeholder="enter your email" value="<?php echo $email; ?>">
		</div>
		<div class="input_group">
            <!-- <label>Address</label> -->
            <i class="fa fa-address-card" aria-hidden="true"></i>
			<input type="text" name="address"  placeholder="enter your address">
		</div>
		<div class="input_group">
            <!-- <label>Phone Number</label> -->
            <i class="fa fa-phone" aria-hidden="true"></i>
			<input type="text" name="phno"  placeholder="enter phone number" minlength="10" maxlength="10" required>
		</div>
		<div class="input_group">
            <!-- <label>Password</label> -->
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
			<input type="password" name="password_1"  placeholder="enter password">
		</div>
		<div class="input_group">
            <!-- <label>Confirm password</label> -->
            <i class="fa fa-unlock" aria-hidden="true"></i>
			<input type="password" name="password_2" placeholder="enter password again">
		</div>
		<!-- <div>
		<input type="checkbox" onclick="myFunction()">Show Password			
			<script>
				function myFunction() {
				var x = document.getElementById("password_2");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
				}
			</script>
		</div> -->
		<div class="input_group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Have an account?<a href="login.php"> Login</a>
		</p>
	</form>

</body>
</html>