<?php
      //Set the Content Type
      header('Content-type: image/jpeg');

      // Create Image From Existing File
      $jpg_image  = imagecreatefromjpeg('img\blackmale.jpg');

      // Allocate A Color For The Text
      $white = imagecolorallocate($jpg_image, $_GET['colorR'],$_GET['colorG'],$_GET['colorB']);

      // Set Path to Font File
      $font_path = __DIR__.'/OpenSans-Bold.ttf';

      // Set Text to Be Printed On Image
        $first = $_GET['first'];
        //$second = $_GET['second'];
            
             $first=wordwrap($first,7,"\n",true);
             
        $text=($first);

      // Print Text On Image
      imagettftext($jpg_image, $_GET['size'], $_GET['tilt'], $_GET['left_right'], $_GET['top_bottom'], $white, $font_path, $text);
        
      // Send Image to Browser
       
              
              imagejpeg($jpg_image);
              //$fileName = "updatedImage_".date("h_i_sa").".png";
              //imagejpeg($jpg_image,$fileName);
       
              //echo($fileName);
      // Clear Memory
      imagedestroy($jpg_image);

    ?>