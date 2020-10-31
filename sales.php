<?php include('header.php');
if(isset($_SESSION['admi'])){ ?>
<body class="ab">
<?php include('navbar.php'); ?>
<div class="container">
	<h1 class="page-header text-left" style="font-family: 'Merriweather', serif;"><b>SALES</b></h1>
	<table class="table table-bordered table-hover" id="tab">
		<thead>
			<th>Date</th>
			<th>Customer</th>
			<th>Total Sales</th>
			<th>Details</th>
			<th>Order</th>
			<th>Status</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td><?php echo $row['email']; ?></td>
						<td class="text-right">&#8377; <?php echo number_format($row['total'], 2); ?></td>
						<td class="text-right"><a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('sales_modal.php'); ?>
						</td>
						<td><form action="" method="POST">
							<button type="submit"  value="<?php echo $row['purchaseid']; ?>" name="ip" class="btn btn-info btn-sm">In Progress</button>
							<button type="submit" value="<?php echo $row['purchaseid']; ?>" name="op" class="btn btn-success btn-sm">Place Order</button>
							</form>
						</td>
						<td>							
							<?php  echo $row['status']; ?>
						</td>
						</tr>

					<?php 
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>
<?php }		
		else
		{
			header("location:start.php");
		}
		?>