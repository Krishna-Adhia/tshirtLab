<?php
	include 'classes/common.php';
	
	require_once'classes/Product.php';
    $objproduct = new product();
    $row = $objproduct->getByPK($_GET);
    if($row === false)
    {
        header("Location:ListProduct.php");
        die();
    }
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Product</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">
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
                    <h1><font color="white">Edit Product</font></h1>
                </div>
                <div class="login-form">
                    <form action="Con_EditProduct.php" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="ProductID" value="<?php echo($row['ProductID']);?>">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="photo" value="<?php echo($row['Image']);?>">
                            </div>
                                <div class="form-group">
                                    <label>Gender</label><br>
                                    <input type="radio"  value="Male" checked="true" name="Gender" value="<?php echo($row['Gender']);?>">Male &nbsp; &nbsp; &nbsp;
                                    <input type="radio"  value="Female" name="Gender" value="<?php echo($row['Gender']);?>">Female 
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control" placeholder="Price" name="price" value="<?php echo($row['Price']);?>">
                                </div>
                                <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" placeholder="Description" name="description" value="<?php echo($row['Description']);?>">
                            </div>
							
                              <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Edit Product</button>
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

</html>
