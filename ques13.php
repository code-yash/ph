
<body style="background-color:Slateblue;">
<?php
$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($a);
echo "Sorting according to values: "."<br>";
foreach ($a as $x=>$x_value){
echo "Key: ".$x." Value: ".$x_value." ";
echo "<br>";}

rsort($a);
echo "Sorting according to values (reverse): "."<br>";
foreach ($a as $y=>$y_value){
echo "Key: ".$y." Value: ".$y_value." ";
echo "<br>";}

ksort($a);
echo "Sorting according to key: "."<br>";
foreach ($a as $x=>$x_value){
echo "Key: ".$x." Value: ".$x_value." ";
echo "<br>";}

krsort($a);
echo "Sorting according to key (reverse): "."<br>";
foreach ($a as $x=>$x_value){
echo "Key: ".$x." Value: ".$x_value." ";
echo "<br>";}
?>
