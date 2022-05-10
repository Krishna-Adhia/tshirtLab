<?php
    include 'parts/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WishList</title>
</head>
<body>
  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Product</th>
							  <th scope="col">Price</th>
                          </tr>
                      </thead>
					  <?php
						include 'C:\xampp\htdocs\t-shirtLab\admin\classes\Wishlist.php';
						$objwishlist = new wishlist();
						$result = $objwishlist->getAll();
						foreach($result as $row)
						{
					  ?>
                      <tbody>
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="\t-shirtLab\admin\upload\<?php echo($row['ProductImg']);?>" alt="" height="250px" width="250px">
                                      </div>
                                      <div class="media-body">
                                         <h4><?php echo($row['ProductName']);?></h4>
                                      </div>
                                  </div>
                              </td>
                             
                              <td>
                                  <h4>Rs.<?php echo($row['ProductPrice']);?></h4>
                              </td>
							  
							  <td>
							  </td>
							  <td>
							  <a href="Con_AddtoCart.php?ProductID=<?php echo ($row['ProductID']);?>"><i style="font-size: 25px;"class="ti-shopping-cart"></a></i>
							  
								<a href="Con_Deletefromwishlist.php?ProductID=<?php echo ($row['ProductID']);?>"><i style="float:right; font-size: 25px; color:red;"class="ti-trash">
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