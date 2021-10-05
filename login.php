<?php
session_start();
$name=$_POST['usern'];
$pwd=$_POST['pass'];
 $pass = sha1($_POST['pass']);
$x=0;
$y=0;
include("connect.php");
$select=mysqli_query($conn,"select* from account");
while($user=mysqli_fetch_array($select))
{
if(($name==$user['username'])&&($pass==$user['password']))

{
 $fst=$user['username'];
  $eml=$user['email'];
  $x=1;
}
}
if($x)
{
  if (!empty($_POST['remember'])) {
$check=$_POST['remember'];
   setcookie("name",$name,time()+3600*24*7);
   setcookie("password",$pwd,time()+3600*24*7);
   setcookie("check",$check,time()+3600*24*7);
  }
  else{
$check=0;
     setcookie("name",$name,7);
       setcookie("password",$pwd,7);
         setcookie("check",$check,7);
  }
echo "Your username and password are correct";

}
else{
  echo "incorect username or password";
}

?>
