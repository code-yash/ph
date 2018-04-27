
<body style="background-color:Slateblue;">
<?php
// function for birthday counter
$n=$_GET["bir"];
function birthday($n)
{
$a=strtotime(date("Y/m/d"));
$b=strtotime($n);
// echo $a;
// echo "</br>";
// echo "<br>";
// echo $b;
$c = $b-$a;
// echo $c;
$t=ceil($c/86400);
if ($t<0)
{
$c=365+$t;
echo $c;
}
else
{
echo $t;
}
}
birthday($n)
?>
