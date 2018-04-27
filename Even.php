<!DOCTYPE html>
<html>
<head>
  <title>Even</title>
</head>
<body style="background-color:SlateBlue;">
<h1 style="text-align:center; color:White;">First N Even Numbers</h1>
	 
		
		<?php
		$n=$_GET["no"];
		
		echo "<h2 style=\"text-align:center; color:White;\">".Even($n)."</h2>";

		function Even($n) {

			for( $i=2; $i<=$n*2; $i+=2)
				echo "<h2 style=\"text-align:center; color:White;\">". $i." ". "</h2>" ;
					}
		?>

		</table></center>
</body>
</html>
