<?php 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
 $user=$_POST['user'];
 $email=$_POST['email'];
 $hashed_pass = sha1($_POST['pwd']);
 $pwd=$_POST['pwd'];
 $cpwd=$_POST['cpwd'];
$re=0;
 if ($pwd!=$cpwd) {
 	echo "<script>alert('Password is not matching... Try again please!')</script>";
 	include "createaccount.php";
 }
 else
 {
  include "connect.php";
         $emi=mysqli_query($conn,"select email from account");
while ($feti=mysqli_fetch_array($emi)) {
   if ($email==$feti['email']) {
       $re=1;

   }
}
}
if($re!=1)
{
    if($user!=$pwd and $email!=$pwd)
    {
$q=mysqli_query($conn,"insert into account values(null,'$fname','$lname','$email','$user','$hashed_pass')");
if ($q) {
	 	echo "<script>alert('Your have created an account! Click ok to login.')</script>";
 	include "index.php";
}
else{
    echo "<script>alert('Failed to create an account!... Try again please!')</script>";
    include "createaccount.php"; 
}
}
else
{
 echo "<script>alert('Your username or email must differ from you password!... Try again please!')</script>";
    include "createaccount.php";    
}
}
else
{
 echo "<script>alert('This email is used by someone else!... Try to use another email!')</script>";
    include "createaccount.php";   
}
 ?>
