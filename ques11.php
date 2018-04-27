<!DOCTYPE html>
<html>
<head>
  <title>String</title>
</head>
<body style="background-color:SlateBlue;">
<h1>String</h1>
	 
		
		<?php
		
		$n=$_GET["str"];   
		echo "<table border ='1' align = 'center'>";
		echo "<tr>";
		for($i=0;$i<=strlen($n);$i++)
		{
			echo "<td>".$n[$i]."</td>";
		}
		echo "</tr>";
		echo "</table>";
		
		?>

</body>
</html>
