<!DOCTYPE html >
<html>

<head>
<title>Welcome</title>
</head>

<body style="background-color:Slateblue;">

<?php
	

		
		echo "<table border='1' style=\"width:100%\">";

		for ($i=1; $i <= 10; $i++) {
			echo "<tr>";
				for ($j=1; $j <= 10 ; $j++) { 
					echo "<td>".$i*$j."</td>";
					}
				echo "</tr>";
 		 } 
		

		echo "</table>";
?>

</body>

