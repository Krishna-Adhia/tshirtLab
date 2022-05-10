<?php
	include 'parts/header.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
</head>
<body>
	<!-- ================ contact section start ================= -->
  <section class="section-margin--small">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map"></div>
        
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236295.70848689362!2d70.6812103892394!3d22.27342688376637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1580714713618!5m2!1sen!2sin" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        
      </div>


      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>123, Main Street</h3>
              <p>Rajkot</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">+91 9658710235</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="#"></a>tshirtlab9@gmail.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">
          <form action="con_addcontact.php" class="form-contact contact_form" method="post">
            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <input class="form-control" name="name" type="text" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="MailAddress" type="email" placeholder="Enter email address" required pattern="^([a-zA-Z0-9_\-/.]+)@([a-zA-A0-9_\-/.]+)\.([a-zA-Z]{2,5})$|">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject" required>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                    <textarea class="form-control different-control w-100" name="message" cols="30" rows="5" placeholder="Enter Message" required></textarea>
                </div>
              </div>
            </div>
              <button type="submit" class="button button--active button-contactForm" style="float:right">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
  
  

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
  <script src="vendors/jquery.form.js"></script>
  <script src="vendors/jquery.validate.min.js"></script>
  <script src="vendors/contact.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>