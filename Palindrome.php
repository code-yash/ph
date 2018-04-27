<!DOCTYPE html>
<html>
<head>
  <title>Palindrome Check</title>
</head>
<body style="background-color:SlateBlue;">
<h1 style="text-align:center;">Palindrome Checker</h1>
	 
		
		<?php
		$n=$_GET["str"];
		if($n==null)
			echo "Enter some text";
		else
			if(Palindrome($n)) 
			echo "<h2 style=\"text-align:center; color:White;\">". $n ." is: Palindrome </h2>";
			else
			echo "<h2 style=\"text-align:center; color:White;\">". $n ." is: Not Palindrome </h2>";
	

		function Palindrome($n) {
			$n2 = strrev($n);
				 if ($n == $n2)	
					return true;
				  else 
					return false;
				   }
		?>

</body>
</html>
