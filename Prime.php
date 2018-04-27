<!DOCTYPE html>
<html>
<head>
  <title>Prime Check</title>
</head>
<body style="background-color:SlateBlue;">
<h1 style="text-align:center;">Prime Checker</h1>
	 
		
		<?php
		$n=$_GET["no"];
		if($n<=0)
			echo "Number should not be negative";
		else 
			echo "<h2 style=\"text-align:center; color:White;\">". $n ." is: </h2>";
		   	Prime($n);

		function Prime($n) {
			$flag=0;
			for( $i=$n; $i>0; $i--)
				 if ($n % $i == 0)	
					$flag++;
				  if ($flag == 2)
					echo "<h3 style=\"text-align:center; color:White;\"> PRIME NUMBER </h2>";
				  else echo "<h3 style=\"text-align:center; color:White;\"> NON-PRIME NUMBER </h2>";
				   }
		?>

</body>
</html>
