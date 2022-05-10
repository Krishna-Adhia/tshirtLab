<?php
include'parts/header.php';
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Single Product</title>
</head>
<body>
  <!--================Single Product Area =================-->
	<?php
		require_once'C:\xampp\htdocs\localhost\t-shirtLab\admin\classes\Product.php';
		$objproduct = new product();
		$result = $objproduct->select($_GET);
	?>
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img src="\t-shirtLab\admin\upload\<?php echo($result['Image']);?>">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $result['Description']?></h3>
						<h2><?php echo "Rs. ".  $result['Price']?></h2>
						<ul class="list">
							<li><span>Availibility</span> : In Stock</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				
				<li class="nav-item">
					<a class="nav-link" href="cart.php">Add to Cart</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link"  href="checkout.php">Buy Now</a>
				</li>
				
				
			</ul>
			<div class="tab-content" id="myTabContent">

				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
				
						<?php
							include 'comment.php';	
						?>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	<!--================ Start related Product area =================-->  
	
	<!--================ end related Product area =================-->  	

		<?php
			include'parts/footer.php';
		?>
  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>