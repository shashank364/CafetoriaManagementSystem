<?php include('header.php');
include('nav1.php'); 
if(isset($_SESSION['username'])){?>
<style>
body{
	/* font-size: 120%; */
	background: url("img/feedback.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	background-position:auto;

	/* background-image: url("bck.jpg"); */
}
form{
	width: 30%;
	margin: 15% auto;
	padding: 20px ;
	/* border: 1px solid #b0c4de; */
	background:none;
	border-radius: 10px ;
	color: black;
	font-weight: 100;
	position:absolute;
	top:-3%;
	left:45%;
	font-size:1.5em;
	/* alignment:center; */
}
input{
	background: none;
	color: rgba(0 0 0 1);
}

p{	font-size:0.9em;
}</style>
<body class="font">
<form method="POST" action="feedback.php">
<h2>Feedback Form</h2>
<!-- <div class="input_group">
<label>Email<label>
<input type="email" class="des" name="email" placeholder="enter Login ID" required>
</div> -->
<div class="input_group">
<p>How do you rate your overall experience?</p>
<input class="a" type="radio" value="good" name="rate" required>Good <input  class="a" type="radio"value="average" name="rate" required>Average <input  class="a" type="radio"value="bad" name="rate" required>Bad
</div>

<div class="input_group">
<label>Discription</label></div>
<textarea class="des" rows = "5" cols = "50" name = "description" style="border: none;outline: none;"placeholder="How Do You Feel About Our Cafeteria"></textarea>
            
<div>
<button type="submit" name="feed" class="btn btn-primary" >POST</button>
<?php 

if(isset($_POST['feed'])){
	// $ema=mysqli_real_escape_string($conn,$_POST['email']);
	$ema=$_SESSION['username'];	
	$rating=mysqli_real_escape_string($conn,$_POST['rate']);
	$desc=mysqli_real_escape_string($conn,$_POST['description']);
	$sql="INSERT INTO `feedback` (`email`,`rating`,`description`,`time`) VALUES ('$ema','$rating','$desc',NOW())";
	$do=mysqli_query($conn, $sql);?>
	<script>window.alert('Thank You For Your Feedback');
			window.location.href='home.php';</script>
<?php }?>		
	</form>
	
<!-- <div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog"> -->  
</body>
<?php }else{
	header("location:login.php");
}
