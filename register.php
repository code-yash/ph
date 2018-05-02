<?php
$name=$_POST["n"];
$b=explode('@',$name);
$password=$_POST["p"];
$connection=mysqli_connect("localhost","root") or die ("Connection for Register not connected");
$d=mysqli_select_db($connection,"helping") or die ("not to database");
$valid=array("gmail.com","yahoo.com","hotmail.com","outlook.in","microsoft.in");
$check=0;$already=0;
foreach($valid as $v)
{
	if ($b[1]==$v)
		$check=1;
}
if ($check==1)
{
	$qc="select uname, domai from userlogin;";
	$rc=mysqli_query($connection,$qc);
	while ($resc=mysqli_fetch_array($rc))
	{
		if ($b[0]==$resc['uname'] && $b[1]==$resc['domai'])
			$already=1;
	}
	if ($already!=1)
	{
		$query="insert into userlogin values('".$b[0]."','".$b[1]."','".$password."');";
        $res=mysqli_query($connection,$query); 
		echo "User Successfully Added";
	}
	else
	{
		echo "Already a member, Please LogIn";
	}
}
else
	echo "Please enter valid ID to register";

mysqli_close($connection);

?>