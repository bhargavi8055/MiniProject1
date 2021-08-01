<?php
$conn=mysqli_connect("localhost","root","","miniproject");
if($con){
   echo "Connection successfull";
}
else{
echo "<h1>Connection failed</h1>";
}
if(isset($_POST['uname'])){
$u=$_POST["uname"];
$pass=$_POST["pwd"];
$e=$_POST["email"];
$q="insert into registration_details values('$u','$e','$pass')";
if(mysqli_query($con,$q))
	echo "Registartion Successful";
else
	echo "Registartion falied";
mysqli_close($con);
header("refresh:2; url=login.html");
}
?>





$conn = mysqli_connect("localhost","root","","miniproject"); 
if($conn)
  echo "<h4>Connected to Database	!!";
else
  echo "Failed to Connect:".mysql_error()."</h4>";

if(isset($_POST['uname'])){
  $u=$_POST['uname'];
  $pass=$_POST['pwd'];
 $e=$_POST['email'];
 $query="insert into registration_details values('$u','$e','$pass')";

 if(mysqli_query($conn,$query))
   echo "Successfully registered";
 else
  echo "something went wrong"; 
}

