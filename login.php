<?php
$un=$_POST["n"];
$pa=$_POST["p"];
$b=explode('@',$un);
$d=array("gmail.com","yahoo.com","outlook.in","hotmail.com","microsoft.in");
$valid=0;$pc=0;
	$f=0;
foreach ($d as $v)
{
	if ($v==$b[1])
		$valid=1;
}
if ($valid==1)
{
	$connection=mysqli_connect("localhost","root") or die ("not connected");
	$data=mysqli_select_db($connection,"db2") or die ("not to database");
	$query="select uname,domain from userlogin where uname='".$b[0]."' and domain='".$b[1]."';";
	$r=mysqli_query($connection,$query);
	while ($res=mysqli_fetch_array($r))
	{
		if ($b[0]==$res['uname'] && $b[1]==$res['domain'])
		{
			$f=1;
			/*if ($pa==$res['pass'])
			{
				$pc=1;
			}*/
		}
	}
	if ($f==1){
	$q="select pass from userlogin where uname='".$b[0]."' and domain='".$b[1]."';";
	$r1=mysqli_query($connection,$q);
	while ($res1=mysqli_fetch_array($r1))
	{
		if ($pa==$res1['pass'])
			{
				$pc=1;
			}
	}
	if ($pc==0)
		echo "Wrong Password";
	else if ($pc==1)
		echo "Welcome ".$b[0].$b[1];
	
	mysqli_close($connection);
	}
	else
		echo "Please register";
	
	
}
else
{
	echo "Enter Valid Id";
}
?>