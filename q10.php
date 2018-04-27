<!DOCTYPE html>
<html>
<head>
  <title>Sort Array</title>
</head>
<body style="background-color:SlateBlue;">
<h1 style="text-align:center;">Sorted Array</h1>
	 
		
		<?php
		$n=$_GET["str"];
		$array= explode(',',$n);
		sort($array);		   
		print_r($array);
		?>

</body>
</html>
