<?php
	include 'classes/common.php';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <title>View Orders</title>
</head>

<body>
<!-- START LEFTPANEL -->
        <?php
            include 'parts/leftpanel.php';
        ?>
    <!-- END LEFTPANEL -->
	
		
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- STAR HEADER  TAG-->


			<?php
				include 'parts/header.php';
			?>
        
        <!-- END HEADER TAG-->

<center style="margin: 40px;">
  	<h1>VIEW ORDERS</h1>
	
                        <div class="container">                
                            <div class="card-body">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">OrderID</th>
                                            <th scope="col">UserID</th>
											<th scope="col">PaymentMode</th>
											<th scope="col">SubTotal</th>
                                            <th scope="col">Total</th>
											<th scope="col">DeliveryAddress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
										require_once'classes/Orders.php';
										$objorders = new Orders();
										$result = $objorders->getAll();
										foreach($result as $row)
										{
									?>
                                        <tr>
                                            <td><?php echo ($row['OrderID']);?></td>
											<td><?php echo ($row['UserID']);?></td>
											<td><?php echo ($row['PaymentMode']);?></td>
											
											<td><?php echo ($row['SubTotal']);?></td>
											<td><?php echo ($row['Total']);?></td>
                                            <td><?php echo ($row['DeliveryAddress']);?></td>
                                        </tr>
									<?php
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
	 </center>
	</div>
    
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</div>
</html>
