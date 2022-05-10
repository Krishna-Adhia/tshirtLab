<!DOCTYPE html>
<html lang="en">

<head>
    <title>Design Lab</title>
    <style>
      body
      {
        background-color: #f1f6f7;
      }
      #ColorPicker1
      {
        /*border-style:  solid;
        border-color: #2196F3;
        border-width: 3px;*/
        cursor: pointer;

      }
    </style>

    <!-- start input type Range CSS -->
    <style>
      td {
        width: 100%;
      }

      .slider {
        -webkit-appearance: none;
        width: 230px;
        height: 2px;
        border-radius: 5px;
        background: #d3d3d3;
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
      }

      .slider:hover {
        opacity: 1;
      }

      .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #2196F3;
        cursor: pointer;
      }

      .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #2196F3;
        cursor: pointer;
      }
    </style>
    <!-- end input type Range CSS -->

    
</head>
<body>
  <!--================ Start Header Menu Area =================-->
      <?php
      include 'parts/header.php';
     ?>
  <!--================ End Header Menu Area =================-->
  
  <div>
    <canvas id="box" width="1200" height="620" 
    style=" margin: 50px; padding: 20px"></canvas>
    
    <div  id="divMsg" style="position: absolute; top:100px; left:100px; width: 900px; height: 700px; font-size: 20px;">

     <br><br><br> 
     <script> 
        function changeColor() { 
            document.getElementById("Myelement").style.color = 
                document.getElementById("ColorPicker1").value; 
        
        var x = document.getElementById("ColorPicker1").value;
      document.getElementById("demo").innerHTML = x;
      R = hexToR(x);
      G = hexToG(x);
      B = hexToB(x);
      
      document.getElementById("colorR").value = R;
      document.getElementById("colorG").value = G;
      document.getElementById("colorB").value = B;
      updateTshirt();
        } 
    function hexToR(h) {return parseInt((cutHex(h)).substring(0,2),16)}
    function hexToG(h) {return parseInt((cutHex(h)).substring(2,4),16)}
    function hexToB(h) {return parseInt((cutHex(h)).substring(4,6),16)}
    function cutHex(h) {return (h.charAt(0)=="#") ? h.substring(1,7):h}
    
    function showsize()
    {
      var y = document.getElementById("size").value;
      document.getElementById("sizevalue").innerHTML = y;
      updateTshirt();
    }
    
    
    function showtilt()
    {
      var y = document.getElementById("tilt").value;
      document.getElementById("tiltvalue").innerHTML = y;
      updateTshirt();
    }
    
    function showleft_right()
    {
      var y = document.getElementById("left_right").value;
      document.getElementById("left_rightvalue").innerHTML = y;
      updateTshirt();
    }
    
    function showtop_bottom()
    {
      var y = document.getElementById("top-bottom").value;
      document.getElementById("top_bottomvalue").innerHTML = y;
      updateTshirt();
    }


    function updateTshirt() {
      var xhttp = new XMLHttpRequest();
       xhttp.responseType = 'blob';
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           
           var blb = new Blob([this.response], {type: 'image/png'});
            var url = (window.URL || window.webkitURL).createObjectURL(blb);
           document.getElementById('img1').src =  url;


        }
      };
      
          //FROM HERE CONTROL FILE IS CALLED 
          xhttp.open("GET", "Con"+genderForTshirt+"_"+colorOfTShirt+".php?colorR="+document.myForm.colorR.value+"&colorG="+document.myForm.colorG.value+"&colorB="+document.myForm.colorB.value+"&first="+document.myForm.first.value+"&size="+document.myForm.size.value+"&tilt="+document.myForm.tilt.value+"&left_right="+document.myForm.left_right.value+"&top_bottom="+document.myForm.top_bottom.value, true);
            xhttp.send();    
      }
     
    
    </script> 
    
  <script>
    var colorOfTShirt = "";
    var genderForTshirt = "";
    function changeGender(gender,color){
      genderForTshirt = gender;
      document.getElementById('img1').src = "img/"+color+gender+".jpg";
    }
    function changeColorOfTShirt(gender,color){
      colorOfTShirt = color;
      document.getElementById('img1').src = "img/"+color+gender+".jpg";
      console.log(colorOfTShirt);
    }
  </script>

    <table>
    <tr>
      <td>
          <input type="radio" name="rbgender" onclick="changeGender('male',colorOfTShirt)">
          <i class="fa fa-male" style="font-size:50px;"></i>
          &nbsp;&nbsp;
          <input type="radio" name="rbgender" onclick="changeGender('female',colorOfTShirt)">
          <i class="fa fa-female" style="font-size:50px;"></i>
          &nbsp;&nbsp;
          <input type="radio" name="colorTshirt" onclick="changeColorOfTShirt(genderForTshirt,'white')">
          White&nbsp;&nbsp;
          <input type="radio" name="colorTshirt" onclick="changeColorOfTShirt(genderForTshirt,'black')">
          Black&nbsp;&nbsp;
          <input type="radio" name="colorTshirt" onclick="changeColorOfTShirt(genderForTshirt,'red')">
          Red&nbsp;&nbsp;
          <hr>
      </td>
    </tr>
      <form name="myForm">
    <input type="hidden" name="tshirtName"/>
       <tr>
          <td>
            <h1 id="Myelement">Color is</h1> 

            <input name="MyColorPicker" type="color"
           id="ColorPicker1" value="#ffffff" onchange="changeColor()" /> 
            <label id="demo"></label>
            <hr>
          </td>
        </tr>
      
    <input type="hidden" name="colorR" id="colorR"/>
      <input type="hidden" name="colorG" id="colorG"/>
      <input type="hidden" name="colorB" id="colorB"/>

    <tr>
      <td>
        <label>First String: </label>
        <input type="text" name="first" id="first" />
        <hr>
      </td>
    </tr>
    
    <tr>
      <td>
        <label>Fonts Size: </label>
        <input type="range" name="size" min="1" max="50" value="0" oninput="showsize()" class="slider" id="size" /> 
        <label id="sizevalue"></label>
        
      </td>
    </tr>
    
    <tr>
      <td>
        <label>Fonts Tilt: </label>
        <input type="range" name="tilt" min="1" max="20" value="0" oninput="showtilt()" id="tilt" class="slider">
        <label id="tiltvalue"></label>
      </td>
    </tr>
    
    <tr>
      <td>
        <label>left-right: </label>
        <input type="range" name="left_right" min="1" max="350" value="0" oninput="showleft_right()" id="left_right" class="slider">
        <label id="left_rightvalue"></label>
      </td>
    </tr>
    <tr>
      <td>
        <label>Top-Bottom: </label>
        <input type="range" name="top_bottom" min="1" max="350" value="0" oninput="showtop_bottom()" id="top-bottom" class="slider">
        <label id="top_bottomvalue"></label>
        <hr>
      </td>
    </tr>
      
   
    </form>  
  </table>
        <!--====Design Lab Content Start-->
    </div>

<img  id="img1" width="300px;" height="350px;"  style="position: absolute; top:200px;  left:900px;">
</div>




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