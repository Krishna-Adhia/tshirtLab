<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="tlogo.jpg" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php" style="color:blue"><img src="tlogo.jpg" height="70px" width="150px" alt="not found"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <!--<li class="nav-item submenu dropdown">
                <a href="DesignLab.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Design Lab</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.php">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.php">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.php">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
                </ul> 
							</li>-->
			<?php
				
				if(!isset($_SESSION['UserName']))
					{
			?>

			<li class="nav-item"><a class="nav-link" href="login.php">DesignLab </a></li>

			<?php
					}
					else
					{
					?>
						<li class="nav-item"><a class="nav-link" href="design_lab.php">DesignLab</a></li>	
					<?php
					}
					?>	
			
              <li class="nav-item">
                <a href="shop.php" class="nav-link">Shop</a>
			</li>
			
			<?php
				
				if(!isset($_SESSION['UserName']))
					{
			?>
				<li class="nav-item"><a class="nav-link" href="login.php">Contact Us </a></li>	
				
			<?php
					}
					else
					{
					?>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>	
					<?php
					}
					?>
			
				  
            </ul>
		<ul class="nav navbar-nav menu_nav ml-auto mr-auto">
			<li class="nav-item submenu dropdown">
				<?php
					if(isset($_SESSION['UserName']))
					{
				?>
							 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Howdy,<?php echo ($_SESSION['UserName'])?></a>
							<ul class="dropdown-menu">
						<li class="nav-item"><a class="nav-link" href="Con_Logout.php">Logout</a></li>
					</ul>
							
				<?php
					}
					
					else
					{
				?>	
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">Howdy,User</a>
							
					<ul class="dropdown-menu">
						<li class="nav-item"><a class="nav-link" href="login.php">Login/Register</a></li>
					</ul>
				<?php
					}
				?>
               
               
			</li>
		</ul>
		
            <ul class="nav-shop">
              <li class="nav-item"><button>
			  <?php
					if(!isset($_SESSION['UserName']))
					{
				   ?>
						<a href="login.php">
					<?php
					}
					else
					{
					?>
						<a href="#">
					<?php
					}
					?>
			  <i style="color:blue;"class="ti-email">
			  </i></a></a></button></li>
			    
			<li class="nav-item"><button>
			 <?php
					if(!isset($_SESSION['UserName']))
					{
				   ?>
						<a href="login.php">
					<?php
					}
					else
					{
					?>
						<a href="wishlist.php">
					<?php
					}
					?>
			  <i style="color:blue;" class="ti-heart">
			  </i></a></a></button></li>
			  
			  
			  <li class="nav-item"><button>
			   <?php
					if(!isset($_SESSION['UserName']))
					{
				   ?>
						<a href="login.php">
					<?php
					}
					else
					{
					?>
						<a href="cart.php">
					<?php
					}
					?>
			  <i style="color:blue;"class="ti-shopping-cart">
			  </i></a></a></button></li>
              
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
</body>
</html>