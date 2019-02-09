<?php
session_start();
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if($conn)
{
	
}
else
	die("Connection failed: " . mysqli_connect_error());

$SNAME=$_SESSION["USER"];
$SEMAIL=$_SESSION["EMAIL"];
$name=$_SESSION["NAME"];
$RNAME=$_POST["uname"];


$sql="INSERT INTO matrimony.contactnow(sname,name,rname,semail) VALUES('$SNAME','$name','$RNAME','$SEMAIL')";

if (mysqli_query($conn, $sql)) {
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 session_write_close();
mysqli_close($conn);
?>