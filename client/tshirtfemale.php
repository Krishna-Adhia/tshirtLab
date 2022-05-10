<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
    function White() 
    {
      location.replace("genderFemale_White.php");
    }
    function Black() 
    {
      location.replace("genderFemale_Black.php");
    }
    function Red() 
    {
      location.replace("genderFemale_Red.php");
    }
  </script>
    
    <!--=====  Custome Radio Button  ====-->

    <style>
          /* The h1 */
h1 {
  font-size: 40px;
  }
  .container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #BCC6CC;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}
</style>

<style>
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content select {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content select:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>


<style >
  /*custom checkbox*/
  /* The container */
.container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark1 {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #BCC6CC;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark1 {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark1 {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark1:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark1:after {
  display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark1:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
</head>
<body>
  <!--================ Start Header Menu Area =================-->
    
  <!--================ End Header Menu Area =================-->
    <center style="margin-top: 200px;">
      <div class="Gender">
        <h1>Choose T-Shirt Color</h1>
        <table>
          <tr>
            <td>
              <label class="container"> White<i class="fa fa-tshirt" style="color: red;"></i> &nbsp;&nbsp; 
                <input type="radio" checked="checked" name="radio" onclick="White()">
                <span class="checkmark"></span>
              </label>
            </td>

            <td>
              <i class="fa fa-tshirt" style="color: red;"></i>
            </td>

            <td> 
              <label class="container" >Black &nbsp;&nbsp;
                  <input type="radio" name="radio" onclick="Black()">
                  <span class="checkmark" ></span>
              </label>
            </td>

            <td> 
              <label class="container" >Red
                  <input type="radio" name="radio" onclick="Red()">
                  <span class="checkmark" ></span>
              </label>
            </td>
          </tr>
        </table>
            <h1>Choose T-Shirt Size</h1>
          <table>
            <tr>
              <td>
                  <label class="container1">S&nbsp;&nbsp;
                    <input type="checkbox" checked="checked">
                    <span class="checkmark1"></span>
                  </label>
              </td>

              <td> 
                  <label class="container1">M&nbsp;&nbsp;
                    <input type="checkbox">
                    <span class="checkmark1"></span>
                  </label>
              </td>

              <td>
                  <label class="container1">L&nbsp;&nbsp;
                    <input type="checkbox">
                    <span class="checkmark1"></span>
                  </label>
              </td>

              <td>
                  <label class="container1">XL
                    <input type="checkbox">
                    <span class="checkmark1"></span>
                  </label>
              </td>
            </tr>
          </table>
      </div>
      
      </center>
    


    


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