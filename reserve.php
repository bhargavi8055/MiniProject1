<?php
$con=mysqli_connect("localhost","root","","miniproject");
$reservetime=$_POST["reservingTime"];
//echo $reservetime;
if($con)
{


$submissiontime=$_POST["submissionTime"];
$section = $_POST["myList"];
//echo $section;
$sql="select * from reservation_details where  reserved_time = '$reservetime'";
$q=mysqli_query($con,$sql);

$count=mysqli_num_rows($q);

if($count==1){
	
	echo "Sorry!The Resource is busy right now .please try again later";
		
}
else{
	
$q1="insert into reservation_details values('$section','$reservetime','$submissiontime')";
if(mysqli_query($con,$q1)){
	echo "Reservation Successful";
	header("refresh:1; url=rese.html");
	/*$to='reshmakuchipudi20@gmail.com';
	$subject='resgistartion successfull';
	$text='resgistartion successfull';
	$headers='From:bhargavi8055@gmail.com';
	mail($to,$subject,$text,$headers);*/

}
	
else
	echo "Reservation falied.Retry!!";
	}
//mysqli_close($con);
}

?>


