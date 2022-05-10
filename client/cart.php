<?php
    include 'parts/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		function getquantity(element)
		{

			var userid = jQuery('#userid').val();
			var x = jQuery(element).val();
			var elementID = jQuery(element).attr("id");
			//Get the id of element to edit total
			var PID = elementID.split("-");
			var PID = PID[1];
			//Calculate total price i.e. quantity*unitprice
			var price = jQuery("#price-"+PID).html();
			var price = price.split(".");
			var price = price[1];
			var total = price*x;
			//Print total
			jQuery("#total-"+PID).html(total);
			

			//sending ajax request
			$.post("demoajax.php",{
				//pid: "productID",
				uid: userid,
				qty: x,
				productid: PID,
				price: total
			},
			);
		}
	</script>
</head>
<body>

  <!--================Cart Area =================-->
 
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
          	<input type="hidden" value="<?php echo $_SESSION['UserID']?>"; id="userid">
              <div class="table-responsive">
                  <table class="table">
                  	<tbody>
                      <thead>
                          <tr>
                              <th scope="col">Product</th>
                              <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Total</th>
							  <th scope="col">Delete</th>
                          </tr>
                      </thead>
					   <?php
						include 'C:\xampp\htdocs\t-shirtLab\admin\classes\Cart.php';
						$objcart = new cart();
						$result = $objcart->getAll();
						
						//Count number of entries of same products in the results
						$pidArray = array();
						foreach($result as $row){
							$pidArray[] = $row['ProductID'];
						}
						//!count number of entries

						$printedPidArray = array();
						foreach($result as $row)
						{
							$productID = $row['ProductID'];
							$counts = array_count_values($pidArray);
							$itemQuantity = $counts[$productID];
							if(!in_array($productID, $printedPidArray)){
					  ?>

					 
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="\t-shirtLab\admin\upload\<?php echo($row['T_ShirtImg']);?>" alt="" height="250px" width="250px">
                                      </div>
								
                                      <div class="media-body">
                                          <p><?php echo($row['T_ShirtName']);?></p>
                                      </div>
								</td>
                                  </div>
                              </td>
                              <td>
                                  <h5 id="<?php echo "price-".$productID; ?>">Rs.<?php echo($row['Price']);?></h5>
                              </td>
                              
							  <td>
								<input style="text-align: center" type="number" Min="1" Max="50" value="<?php echo ($row['Quantity']); ?>" name="proquantity"id="<?php echo "quantity-".$productID; ?>" class="quantity_dropdown" data-productid="1" onchange="getquantity(this)">
							  </td>
							  
							  	<?php
							  		$totalprice = $itemQuantity*$row['Price'];
							  	?>




                              <td>  
                                  <h5 id="<?php echo "total-".$productID; ?>"><?php echo $totalprice?></h5>
                              </td>
							  
							  
							  <td>
								<a href="Con_DeleteFromCart.php?ProductID=<?php echo ($row['ProductID']);?>"><i style="color:red; font-size: 30px;"class="ti-trash"></i></a>
							  </td>
                         
						    <?php
						    	} //!if in $printedPidArray
						    	$printedPidArray[] = $productID;
							}

							//include_once'Con_UpdateCart.php';
							?>	

							<!-- update cart -->	
							<?php
								// $quantity;
								
								$subtotal = $totalprice + 50;
								$con = mysqli_connect("localhost","root","","tshirtlab") or die('Unable to connect');

								$update = "UPDATE cart SET Quantity = $itemQuantity,  SubTotal =$subtotal , Total = $totalprice;";

									$result = mysqli_query($con,$update) or die('Cant update cart');

							?>
							
                      </tbody>
                  </table>
				  
				  <a href="checkout.php" style="float:right; " class="button button--active button-contactForm">Buy Now</a>
				</button>
              </div>
          </div>
      </div>
  </section>

  <!--================End Cart Area =================-->



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