<?php include('header.php');
if(isset($_SESSION['admi'])){ ?>
<body class="ab">
<?php include('navbar.php'); 
?>
<div class="container">
	<h1 class="page-header text-left" style="font-family: 'Merriweather', serif;"><b>FEEDBACK</b></h1>
	<table class="table table-bordered table-hover" id="tab">
		<thead>
			<th>Date</th>
			<th>Customer</th>
			<th>Rating</th>
			<th>Description</th>
		</thead>
		<tbody>
			<?php 
				$sql=mysqli_query($conn,"SELECT * FROM `feedback` order by time desc");

				while($row=$sql->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['time']))  ?></td>
						<td><?php echo $row['email']; ?></td>
						<td> <?php echo $row['rating'] ?></td>
						<td><?php echo $row['description']; ?></td>
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