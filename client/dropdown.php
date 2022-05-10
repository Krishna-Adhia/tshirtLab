<html> 
  
<head> 
</head> 
  
<body> 
    <h1 id="Myelement"> 
        Your Selected color is
    </h1> 
    <input name="MyColorPicker" 
           type="color"
           id="ColorPicker1" value="#000000" onchange="changeColor()" /> 
		   
		   <p id="demo"></p>
		   <label>Size</label>
		   <p id="sizevalue"></p>
		   <label>Tilt</label>
		   <p id="tiltvalue"></p>
		   <label>Left-Right</label>
		   <p id="left_rightvalue"></p>
		   <label>Top-Bottom</label>
		   <p id="top_bottomvalue"></p>
		   <label>Total_words</label>
		   <p id="total_wordsvalue"></p>
    <script> 
        function changeColor() { 
            document.getElementById("Myelement").style.color = 
                document.getElementById("ColorPicker1").value; 
				
				var x = document.getElementById("ColorPicker1").value;
			document.getElementById("demo").innerHTML = x;
			R = hexToR(x);
			G = hexToG(x);
			B = hexToB(x);
			
			document.getElementById("colorR").value = R;document.getElementById("colorG").value = G;
			document.getElementById("colorB").value = B;
        } 
		function hexToR(h) {return parseInt((cutHex(h)).substring(0,2),16)}
		function hexToG(h) {return parseInt((cutHex(h)).substring(2,4),16)}
		function hexToB(h) {return parseInt((cutHex(h)).substring(4,6),16)}
		function cutHex(h) {return (h.charAt(0)=="#") ? h.substring(1,7):h}
		
		function showsize()
		{
			var y = document.getElementById("size").value;
			document.getElementById("sizevalue").innerHTML = y;
		}
		
		
		function showtilt()
		{
			var y = document.getElementById("tilt").value;
			document.getElementById("tiltvalue").innerHTML = y;
		}
		
		function showleft_right()
		{
			var y = document.getElementById("left_right").value;
			document.getElementById("left_rightvalue").innerHTML = y;
		}
		
		function showtop_bottom()
		{
			var y = document.getElementById("top-bottom").value;
			document.getElementById("top_bottomvalue").innerHTML = y;
		}
		
		function showtotal_words()
		{
			var y = document.getElementById("total_words").value;
			document.getElementById("total_wordsvalue").innerHTML = y;
		}
    </script> 
	
	<table>
		<form action="testImageProcessing.php">
		<input type="hidden" name="colorR" id="colorR"/>
			<input type="hidden" name="colorG" id="colorG"/>
			<input type="hidden" name="colorB" id="colorB"/>
		<tr>
			<td>
				<label>FirstString: </label>
				<input type="text" name="first" />
			</td>
		</tr>
		
		<tr>
			<td>
				<label>Fonts Size: </label>
				<input type="range" name="size" min="1" max="50" value="0" oninput="showsize()" id="size">
			</td>
		</tr>
		
		<tr>
			<td>
				<label>Fonts Tilt: </label>
				<input type="range" name="tilt" min="1" max="20" value="0" oninput="showtilt()" id="tilt">
			</td>
		</tr>
		
		<tr>
			<td>
				<label>left-right: </label>
				<input type="range" name="left_right" min="1" max="350" value="0" oninput="showleft_right()" id="left_right">
			</td>
		</tr>
		
		<tr>
			<td>
				<label>Top-Bottom: </label>
				<input type="range" name="top-bottom" min="1" max="1000" value="0" oninput="showtop_bottom()" id="top-bottom">
			</td>
		</tr>
		
		<tr>
			<td>
				<label>Total_words: </label>
				<input type="range" name="total_words" min="1" max="10" value="0" oninput="showtotal_words()" id="total_words">
			</td>
		</tr>
			
		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>

			
			
		</form>
	</table>
	
	
</body> 
  
</html> 