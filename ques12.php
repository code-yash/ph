<!DOCTYPE html>
<html>
<head>
  <title>String</title>
  <meta charset="UTF-8">
</head>

<body style="background-color:Slateblue;">
<?php
$g=$_GET["n1"];
$a=explode(',',$g);
$d=current($a);
$short=strlen($d);
$lar=strlen($d);
for ($i=1;$i<count($a);$i++)
{
	if (strlen($a[$i]) < $short)
		$short=strlen($a[$i]);
	if (strlen($a[$i]) > $lar)
		$lar=strlen($a[$i]);
}

echo "Shortest Length: ".$short."<br>";
echo "Largest Length: ".$lar."<br>";
?>

</body>
</html>
