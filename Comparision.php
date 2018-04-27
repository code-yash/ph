<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <meta charset="UTF-8">
</head>
<body style="text-align:center; background-color:Slateblue;">

	<?php

	$n1= $_GET["no1"];
	$n2= $_GET["no2"];
	$n3= $_GET["no3"];
		
		$largest= $n1>$n2?($n1>$n3?$n1:$n3):($n2>$n3?$n2:$n3);
		echo "<br><br><br><br><h2 style=\"color:White;\"> LARGEST NUMBER IS: ".$largest."</h2>";

	?>
</body>
</html>
