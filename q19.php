


 <meta charset="UTF-8">
<body style="background-color:Slateblue;">
<?php
$n=$_POST["lang"];
switch ($n)
{
case "ENGLISH" : echo "Hello";
break;
case "HINDI" : echo "नमस्ते";
break;
case "RAJASTHANI" : echo "खम्मा घणी";
break;
case "URDU" : echo "ہیلو";
break;
default : echo "Hello";
}
?>
