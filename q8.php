<!DOCTYPE html>
<html>
<head>
  <title>Q8</title>
</head>
<body style="background-color:SlateBlue;">
<h1 style="text-align:center;">Format</h1>
	 
		
		<?php
		echo format(4);   

		function format($rows) {

		for ($i=0; $i < $rows; $i++) {
			for ($j=0; $j <= $i ; $j++) { 
				echo " * ";
		 } 
		 echo "<br>";
		}
	}

		?>

</body>
</html>
