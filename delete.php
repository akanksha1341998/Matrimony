<?php

session_start();

$con=mysqli_connect('localhost','root','','matrimony');

$gender=$_SESSION["GEN"];
$un=$_SESSION["USER"];
if($gender == 'female')
{
	$sql="DELETE FROM female WHERE username='$un'";
	mysqli_query($con,$sql);
	$sql="DELETE FROM contactnow WHERE sname='$un'";
	mysqli_query($con,$sql);
}
else
{
	$sql="DELETE FROM male WHERE username='$un'";
	mysqli_query($con,$sql);
	$sql="DELETE FROM contactnow WHERE sname='$un'";
	mysqli_query($con,$sql);
}	

$con->close();
header("Location:homepage.html");
?>