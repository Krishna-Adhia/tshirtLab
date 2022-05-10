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
    <title>List Products</title>
	
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
   <h1>LIST PRODUCT</h1>
					
						<div class="container">
                            <div class="card-body">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">ProductID</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										require_once'classes/Product.php';
										$objproduct = new product();
										$result = $objproduct->getAll();
										foreach($result as $row)
										{
									?>
                                        <tr>
										  <td><?php echo ($row['ProductID']);?></td>
										  <td><img src="upload/<?php echo ($row['Image']);?>"height="40px" width="40px"></td>
										  <td><?php echo ($row['Gender']);?></td>
										  <td><?php echo ($row['Price']);?></td>
										  <td><?php echo ($row['Description']);?></td>
										  <td><a  style="color: green"href="EditProduct.php?ProductID=<?php echo ($row['ProductID']);?>">Edit</a></td>
										  
										  
										  <td>
											<!--<a style="color: red" href="Con_DeleteProduct.php?ProductID= onclick="confirm('Are you sure,You want Delete??');">Delete</a>-->
											<a style="color:red" type="button" btn-sm" value="Delete" onclick="return deleteTask()" href="DeleteProduct.php?ProductID=<?php echo $row['ProductID'] ?>" >Delete</a>
											</td>
										</tr>
										
									<?php
										}
									?>
                                    </tbody>
                                </table>
                            </div>
						</div>
	</div>
</center>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</div>
</html>
