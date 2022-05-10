<?php
  include 'parts/header.php';
  //SESSION_START();
  //GLOBAL $subtotal;
  $subtotal=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout</title>
</head>
<body>
	
  <!--================Checkout Area =================-->
  <section class="checkout_area section-margin--small">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" method="post" action="completeorder.php">
                        <div class="col-md-6 form-group p_star" >
                            <input type="text" class="form-control" name="FirstName" placeholder="FirstName" required>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" name="LastName" placeholder="LastName" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="Contactno" placeholder="Contact Number" required>
                        </div>
						
						<div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" name="MailAddress" placeholder="Email" required pattern="^([a-zA-Z0-9_\-/.]+)@([a-zA-A0-9_\-/.]+)\.([a-zA-Z]{2,5})$|">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" name="City" placeholder="City" required>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" name="State" placeholder="State" required>
                        </div>
						
						<div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" name="Country" placeholder="Country" required>
                        </div>
                       
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="Zip" placeholder="Postcode/ZIP" required>
                        </div>
                        
                        <div class="col-md-12 form-group mb-0">
                            <div class="creat_account">
                                <h3>Shipping Details</h3>
                            </div>
                            <textarea class="form-control" name="Address" id="message" rows="1" placeholder="Shipping Address" required></textarea>
                        </div>
						
				
						
                </div>
                <div class="col-lg-4">
					
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
							
                            <li><a href="#"><h4>Product <span>Total</span></h4></a></li>
							<?php
								
								include'C:\xampp\htdocs\t-shirtLab\admin\classes\Cart.php';
								$objcart = new cart();
								$result = $objcart->getAll();
                $count = 1;
                $subtotal = 0;
								foreach($result as $row){
								
							?>
								<li><a href="#"><?php echo($row['T_ShirtName']);?>
									<?php $count = $count + 1?>
									<input type="hidden" name="pcount" value="<?php echo $count ?>"
								<span> &nbsp; x &nbsp; <?php echo 'qty'. $row['Quantity'] ?></span><span class="last">Rs.<?php echo($row['Price']);?></span></a></li>				
								<?php 
								  $subtotal =  $subtotal + $row['Price'];

								?>
                 <input type="hidden" name="subtotals" value="<?php echo $subtotal; ?>">
							<?php
								}
							?>
                        </ul>
					
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span><?php echo  $subtotal;?></span></a></li>
							
                            <li><a href="#">Shipping <span>Rs.50</span></a></li>
							<?php $total = $subtotal + 50?> 
							 <input type="hidden" name="totals" value="<?php echo $total; ?>">
                            <li><a href="#">Total <span><?php echo $total?></span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector" checked="true">
                                <label for="f-option5">Cash On Delivery</label>
                                <div class="check"></div>
                            </div>
                            <p>Please fill all the address details properly.</p>
                        </div>
                        <!-- <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">Paypal </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                account.</p>
								
								
                        </div> -->
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector" required="true">
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms & conditions*</a>
                        </div>
					  <div>
						<button class="button button-paypal">Proceed</button>
						
					</div>
                    </form>
                    </div>
                </div>
				
            </div>
        </div>
        <script type="text/javascript">
         
          
        </script>

    </div>
  </section>
  
  <!--================End Checkout Area =================-->



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
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>