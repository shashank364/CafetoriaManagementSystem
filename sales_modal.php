<!-- Sales Details -->
<?php if(isset($_SESSION['admi'])||isset($_SESSION['username'])){ ?>
<div class="modal fade"  id="details<?php echo $row['purchaseid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title"style="margin-top:25px;" id="myModalLabel">Sales Full Details</h4></center>
            </div>
            <div id="printableArea<?php echo $row['purchaseid']; ?>">
            <div class="modal-body">
                <div class="container-fluid">
                    <h5>EMAIL: <b><?php echo $row['email']; ?></b>
                        <span class="pull-right">
                            <?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?>
                        </span>
                    </h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Purchase Quantity</th>
                            <th>Subtotal</th>
                        </thead>
                        <tbody>
                            <?php
                                $sql="select * from purchase_detail left join product on product.productid=purchase_detail.productid where purchaseid='".$row['purchaseid']."'";
                                $dquery=$conn->query($sql);
                                while($drow=$dquery->fetch_array()){
                                    ?>
                                    <tr>
                                        <td><?php echo $drow['productname']; ?></td>
                                        <td class="text-right">&#8377; <?php echo number_format($drow['price'], 2); ?></td>
                                        <td><?php echo $drow['quantity']; ?></td>
                                        <td class="text-right">&#8377;
                                            <?php
                                                $subt = $drow['price']*$drow['quantity'];
                                                echo number_format($subt, 2);
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    
                                }
                            ?>
                            <tr>
                                <td colspan="3" class="text-right"><b>TOTAL</b></td>
                                <td class="text-right">&#8377; <?php echo number_format($row['total'], 2); ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            </div>
            <div class="modal-footer">
            <!-- <button type="button" onclick="printDiv('printableArea<?php echo $row['purchaseid']; ?>')" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button> -->
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
   
        document.body.innerHTML = printContents;
   
        window.print();
        window.location.href='use_sale.php';   
        document.body.innerHTML = originalContents;
   }    </script>



<?php    }
			else{
				header("location:login.php");
			} ?>
