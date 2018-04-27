
<?php
$e=$_GET["email"];
$p=$_GET["pass"];


$conn= mysql_connect("localhost","root","tiger");
  $db= mysql_select_db("login_db",$conn)
            or die ("unsuccessful");
     echo $conn."<br>";
     echo $db."<br>";



$query = "select * from credentials where email='$e' and pass='$p' ";
$res = mysql_query($query);
echo $res;
$result = mysqli_fetch_array($query);
print_r($result);

if($result)
echo "Login Succesful";
else
echo "Login Unsuccesful".mysqli_error($conn);



mysql_close($conn);
?>
  

