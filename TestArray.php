<!DOCTYPE html>
<html>
<head>
  <title>Array Table</title>
  <meta charset="UTF-8">
</head>
<body style="background-color:SlatePurple;">
<h1 style="text-align:center;">Array Table for numbers 1,6,8 is:</h1>
	 
		<center><table border='200'>
		
		<?php
		$a= array('1','6','8');
		reset($a);
		$d= current($a);
			while($d)
			{		
				echo "<tr><td>".$d."</td>";
				$d=next($a);
				echo "</tr>";
			}
		?>

		</table></center>
</body>
</html>
			
