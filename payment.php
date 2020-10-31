<?php include('header.php'); 
if(isset($_SESSION['username'])){   ?>
<form action="" method="POST">
<div class="container">
    <body>
    <div class="row">
        <div class="jumbotron">
          <h1 class="text-center">Online Payment</h1>
          <p class="text-center">Enter your payment details below.</p>
        </div>
    </div>
    <div class="container"><h3>Grand Total:
    <form action="" method="POST">
    <?php $em=$_SESSION['username'];
     $sql="SELECT * from `purchase`where email='$em' order by purchaseid desc";
      $query=mysqli_query($conn,$sql);
      $row=$query->fetch_array();?>   
      <span>&#8377;<?php echo $row['total'];?></span> 
    </form>
    </h3></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="credit-card-div">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h5 class="text-muted"> Credit Card Number</h5>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000"minlength="4" maxlength="4" required >
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000"minlength="4" maxlength="4" required >
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000"minlength="4" maxlength="4" required >
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000"minlength="4" maxlength="4" required >
                            </div>
                        </div>
                        <br>
                        <div class="row ">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font"> Expiry Month</span>
                                <input type="text" class="form-control" placeholder="MM"minlength="2" maxlength="2" required >
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font">  Expiry Year</span>
                                <input type="text" class="form-control" placeholder="YY"minlength="2" maxlength="2" required >
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font">  CCV</span>
                                <input type="text" class="form-control" placeholder="CCV"minlength="3" maxlength="3" required >
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3"><br>
                                <img src="img/creditcard.png" class="img-rounded" required >
                            </div>
                        </div>
                        <br>
                        <div class="row ">
                            <div class="col-md-12 pad-adjust">

                                <input type="text" class="form-control" placeholder="Name On The Card" required >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 pad-adjust">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked class="text-muted" required> Save details for fast payments. <a href="#">Learn More</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row ">                            
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                              <button type="submit" class="btn btn-success btn-block " name="pay">PAY NOW</button>
                            </div></form>
                            <form action="" method="POST">
                            <?Php $emai=$_SESSION['username'];
	                                $sql="SELECT * from `purchase`where email='$emai' order by purchaseid desc";
                                    $query=mysqli_query($conn,$sql);
                                    $row=$query->fetch_array() ?>
                                    <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                            <button type="submit" value="<?php echo $row['purchaseid']; ?>" name="rem" class="btn btn-danger btn-block">Cancel</button>
                            </div>
                        </div>                  
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
</form>
</body><?php }
else{
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='use_ord.php';
		</script>
<?php } ?>