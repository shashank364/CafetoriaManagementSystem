<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			/*background-color:rgb(132,223,226);*/
			background-color: white;
			background: url("img/start.jpg");
			background-size:cover;
			background-repeat: no-repeat;
		}
	</style>
</head>
<body>
<div id="back">
<img id="p" src="img/logo.jpg"> 
</div>


<nav class="navbar navbar-default navbar-inverse" >  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="overflow:auto;font-size:0.9em;">
      <ul class="nav navbar-nav">
        <li><a href="start.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-user"></span>About Us </a></li>
       
		   
		<li style="margin-left:75rem;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span>Sign In<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login.php">User Login</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="login.php">Admin Login</a></li>
          </ul>
		</li>         
		 <li ><a href="register.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
          </ul>
    </div>
    <!-- /.navbar-collapse -->
  <!-- </div>/.container-fluid -->
</nav>






</body>
</html>
<!-- <hr style="height: 12px;border: 0;box-shadow: inset 0 15px 20px -10px rgb(117,117,208) ;"></hr> -->