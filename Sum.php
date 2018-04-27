<!DOCTYPE html>
<html>
<head>
  <title>Odd</title>
</head>
<body style="background-color:SlateBlue;">
<h1 style="text-align:center; color:White;">Sum of First N Odd Numbers</h1>
	 
		
		<?php
		$n=$_GET["no"];
		
		echo "<h2 style=\"text-align:center; color:White;\"> Sum is: ".odd_sum($n)."</h2>";

		function odd_sum($n) {

			for( $i=1; $i<=$n*2; $i+=2)
				$sum+=$i;
				return $sum;
					}
		?>

		</table></center>
</body>
</html>
