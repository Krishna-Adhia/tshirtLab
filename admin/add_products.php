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
    <title>Add Products</title>
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


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h1><font color="black">ADD PRODUCT</font></h1>
                </div>
                <div class="login-form">
                    <form action="Con_AddProduct.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="photo" required>
                            </div>
                                <div class="form-group">
                                    <label>Gender</label><br>
                                    <input type="radio"  value="Male" checked="true" name="Gender">Male &nbsp; &nbsp; &nbsp;
                                    <input type="radio"  value="Female" name="Gender">Female 
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control" placeholder="Price" name="price" required>
                                </div>
                                <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" placeholder="Description" name="description" required>
                            </div>
                                   
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</div>
</html>
