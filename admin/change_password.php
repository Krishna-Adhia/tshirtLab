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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Change Password</title>
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
	
	<script>
			function myFunction()
			{
				alert("Are you sure, you want change your password?");
			}
		</script>
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
                <div class="login-form">
                    <form action="Con_ChangePassword.php" method="POST">
						<div class="form-group">
                            <input type="hidden" name="AdminID" value="<?php echo $_SESSION['AdminID']; ?>">
                        </div>
						
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" name="OldPassword" class="form-control" placeholder="OldPassword" required>
                        </div>
						
						<div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="NewPassword" class="form-control" placeholder="NewPassword" required pattern="(?=^.{8,12}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{:;'?/>.<,])(?!.*\s).*$">
                        </div>
						
                          <div class="form-group">
                             <label>Confirm Password</label>
                              <input type="password" name="ConfirmPassword" class="form-control" placeholder="ConfirmPassword" required>
						  </div>
                                <button type="submit" ID="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="Submit" onclick="myFunction()">Set Password</button>
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
