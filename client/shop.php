<?php
  include 'parts/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop</title>
	<style>
		.column{
			float: left;
			width: 33%;
			padding: 5px;
		}
		
		.row::after{
			content: "";
			clear: both;
			display: table;
		}
		
	</style>

	<script type="text/javascript">
		function productaddedtowishlist()
		{

				 alert('Product added to wishlist');
		}

		function productaddedtocart()
		{

				 alert('Product added to cart');
		}
	</script>
</head>
<body>
	


	<!-- ================ category section start ================= -->		  
  
<?php
	if(isset($_GET['error']) && $_GET['error'] == 'productexists'){
	?>
	<div class="alert alert-warning" role="alert">
		Product Exists
	</div>
	<?php
	}

?>

  <section class="section-margin--small mb-5">
    <div class="container">
      <div class="row">
       
        <div class="col-xl-12 col-lg-8 col-md-6">
          
		  
		  	<?php
				include'C:\xampp\htdocs\t-shirtLab\admin\classes\Product.php';
					$objproduct = new product();
					$result = $objproduct->getAll();
					foreach($result as $row)
					{
						
					?>
						
					<?php
					$n=1;
						if($n%3==0)
						{	
							echo"<table>";
							echo"<tr>";
						}
						
				  ?>
			<div style="display:inline-grid;" class="grid-container">
				 <div class="grid-item">
					<img src="\t-shirtLab\admin\upload\<?php echo($row['Image']);?>"vspace="45px" hspace="10px" height="250px" width="250px">
				</div>
				
				<div class="grid-item" style="text-align:center">
						<li type="none">
						   <button>
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
							<a href="single-product.php?ProductID=<?php echo ($row['ProductID']);?>"
							<?php
								}	
								?>
								<i class="ti-comment"></i></a></a>
							</button>
							
						   <button>
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
									<a href="Con_AddtoCart.php?ProductID=<?php echo ($row['ProductID']);?>">
							<?php
								}
								?>
						   <i class="ti-shopping-cart"></i></a></a>
						   </button>
						   
						     <button>
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
									<a href="Con_AddtoWishlist.php?ProductID=<?php echo ($row['ProductID']);?>" onclick="productaddedtowishlist()">
							<?php
								}
								?>
						   <i class="ti-heart"></i></a></a>
						   </button>
						</li>
				</div>
			</div>
					
					<?php
					}
					
					$n++;
					echo"</tr>";
					echo"</table>";
					
					?>
					
					
					</div>
					
				</div>
			</div>					
      </div>
    </div>
  </section>
		  


  <!--================ Start footer Area  =================-->	
	<?php
    include 'parts/footer.php';
  ?>
	<!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/nouislider/nouislider.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>