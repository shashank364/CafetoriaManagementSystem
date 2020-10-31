
<?php include('conn.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<!-- <link rel="stylesheet" href="user.css"> -->
	<style>
		@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
	font-size: 120%;
	background: url("img/home1.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	background-position:auto;

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
/* .header{
	width: 30%;
	margin: 10px auto;
	font-size: 2em;
	color: rgb(14, 13, 13);
	background: rgba(255, 255, 255,1);
	text-align: center;
	border: 1px solid #b0c4de;
	border-bottom: none;
	border-radius:10px 10px 0px 0px;
	padding: 5px 20px; 
	font-family: 'Glyphicons Halflings';
} */
a{
	color: white;
}
form{
	width: 30%;
	margin: 10% auto;
	padding: 20px ;
	/* border: 1px solid #b0c4de; */
	background:none;
	border-radius: 10px ;
	color: rgb(250, 248, 245);
	font-weight: 100;
	position:absolute;
	top:-3%;
	left:58%;
	/* alignment:center; */
}
input{
	background: none;
	color: rgba(0 0 0 1);
}
.input_group{
	margin: 20px 0px 20px 0px;
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
	<form method="post" action="" autocomplete="none">
	<h2>Login</h2>
	<?php include('errors.php'); ?>

		<div class="input_group">
			<!-- <label>Username</label> -->
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" name="email" placeholder="enter your email">
		</div>
		
		<div class="input_group">
			<!-- <label>Password</label> -->
			<i class="fa fa-lock" aria-hidden="true"></i>
			<input type="Password" name="password"  placeholder="enter your password">
		</div>
		
		<div class="input_group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Do not have an account?<a href="register.php"> Register</a>
		</p>
		</form>

</body>
</html>