<!DOCTYPE html>
<html>
<head>
  <title>Factorial</title>
</head>
<body style="background-color:SlateBlue;">
<h1 style="text-align:center;">Factorial</h1>
	 
		
		<?php
		$n=$_GET["no"];
		if($n<=0)
			echo "Number should not be negative";
		else
			echo "<h2 style=\"text-align:center; color:White;\"> Factorial of ".$n." is: ".factorial($n)."</h2>";

		function factorial($n) {
			$factorial=1;
			for( $i=$n; $i>0; $i--)
				 $factorial *= $i;
					return $factorial;
					}
		?>

		</table></center>
</body>
</html>
