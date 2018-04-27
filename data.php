<!DOCTYPE html>
<html>
<head>
  <title>Welcome <?php echo $_GET["firstname"]; ?> </title>
  <meta charset="UTF-8">
</head>
<body style="background-color:powderblue;">
<h2 style="text-align:center"> Your Given Information is succesfully Recorded </h2>
<p style="text-align:center"><ins>Name:</ins><?php echo " "; echo $_GET["firstname"]; echo " "; echo $_GET["lastname"]; ?> </p>
<p style="text-align:center"><ins>Email:</ins><?php echo " "; echo $_GET["email"]; ?> </p>
<p style="text-align:center"><ins>Gender:</ins><?php echo " "; echo $_GET["gender"]; ?> </p> <br><br><br>

<p style="text-align:center">
	<?php 
		$s1 = $_GET["s1"];
		$s2 = $_GET["s2"];
		if($s1 > $s2)
			echo "<ins>You scored more in 1st Semester</ins> <br><br>";
		else
			echo "<ins>You scored more in 2nd Semester</ins><br><br>";
		$sub = $_GET["RecieveNewsletter"];
		if($sub == "")
			echo "<ins>You are not subscribed for Newsletter</ins><br><br>";
		else
			echo "<ins>You are subscribed for Newsletter</ins><br><br>";
	
	?>
</p>

</body>
</html>
