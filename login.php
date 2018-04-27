
 <?php
    $un = $_GET["user"];
    $pass = $_GET["passw"];

    $conn = mysql_connect("localhost","root","tiger") or die ("unsuccessful1");
     $db= mysql_select_db("phplogin",$conn)
            or die ("unsuccessful1");
     echo $conn."<br>";
     echo $db."<br>";
     
   $query = "select * from logi where username='$un' and password='$pass' ";
   
  $res = mysql_query($query);

  echo $res;
        $s=mysql_fetch_array($res);   

   if($s){

   
            echo "Aready registered";

       }


      else{

 
            echo "Not registered";

       }



  
?>


