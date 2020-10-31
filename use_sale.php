<?php include('header.php');
if(isset($_SESSION['username'])){ ?>
<body class="ab">
<?php include('nav1.php'); ?>
<div class="container">
	<h1 class="page-header text-left" style="font-family: 'Merriweather', serif;"><b>SALES</b></h1>
	<table class="table table-bordered table-hover" id="tab">
		<thead>
			<th>Date</th>
			<!-- <th>Name</th> -->
			<th>Total Sales</th>
			<th>Details</th>
			<th>Cancel</th>
			<th>Status</th>
		</thead>
		<tbody>
			<?php 
				$emai=$_SESSION['username'];
				$na=mysqli_query($conn,"SELECT * FROM user where email='$emai'");
				$rw=$na->fetch_array();
				$sql="SELECT * from `purchase`where email='$emai' order by purchaseid desc";
				$query=mysqli_query($conn,$sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<!-- <td><?php echo $rw['username']; ?></td> -->
						<td class="text-right"> <?php echo number_format($row['total'], 2); ?></td>
						<td><a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('sales_modal.php'); ?>
						</td>
						<td><form action="" method="POST">
								<button type="submit" value="<?php echo $row['purchaseid']; ?>" name="del" class="btn btn-danger btn-sm">Cancel</button>
						</form>
							</td>
						 <td class="text-left"> <?php  echo $row['status']  ?>  </td> 
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>
			<?php    }
			else{
				header("location:start.php");
			} ?>