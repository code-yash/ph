<?php
$a=$_POST["n1"];
$c=$_POST["n2"];//password
$b=explode('@',$a);
$connection=mysqli_connect("localhost","root") or die ("Unsuccessful");
$d=mysqli_select_db($connection,"helping") or die ("NOT TO DATABASE");
//$query="select uname, domai from userlogin where uname="."'".$b[0]."' and domai="."'".$b[1]."';";
$ar=array("gmail.com","yahoo.com","hotmail.com","outlook.in","microsoft.in");
$valid=0;
foreach($ar as $values)
{
	if ($b[1]==$values)
		$valid=1;
}

if ($valid==1)
{
$query="select uname, domai from userlogin where uname='".$b[0]."' and domai='".$b[1]."';"; 
$f=0;$p=0;
$r=mysqli_query($connection,$query);
while($res=mysqli_fetch_array($r))
{
	if($b[0]==$res['uname'] && $b[1]==$res['domai'])
	{
		$f=1;
		   //echo "Welcome ".$res['uname']."@".$res['domai'];
	}  
}
if ($f==1){
$q2="select pass from userlogin where uname='".$b[0]."' and domai='".$b[1]."';";
$r2=mysqli_query($connection,$q2);
while ($res2=mysqli_fetch_array($r2))
{
	if ($c==$res2['pass'])
		{
			$p=1;
		    echo "Welcome ".$b[0]."@".$b[1];
		}
}
if ($p==0)
	echo "Wrong Password";

}
else
	echo "Please Register";    
}
else
	echo "Enter Valid domain";
mysqli_close($connection);
?>