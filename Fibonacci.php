<!DOCTYPE html>
<html>
<head>
  <title>Fibonacci</title>
</head>
<body style="background-color:SlateBlue;">
<h1 style="text-align:center;">Fibonacci Finder</h1>
	 
		
		<?php
		$n=$_GET["no"];
		if($n<=0)
			echo "Number should not be negative";
		else 
			echo "<h2 style=\"text-align:center; color:White;\">". $n ." is:".Fib($n)."</h2>";
		   

		function Fib($n) {
			if ($n <= 1)
			return $n;
			else
			return Fib($n-1) + Fib($n-2);
				   }
		?>

</body>
</html>
