<?php
$con=mysqli_connect("localhost","root","","miniproject");
if($con)
{
$e=$_POST["email"];
$p=$_POST["pwd"];

$sql="select * from  registration_details where email='$e' and password='$p'";
$q=mysqli_query($con,$sql);


$count=mysqli_num_rows($q);

if($count==1){
	
	echo "Welcome  ".$e;
	header("refresh:2; url=reserve.html");
	
}
else
	echo "Invalid username/password";

}

?>


