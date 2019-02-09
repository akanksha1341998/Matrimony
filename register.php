<?php

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if($conn)
{
	
}
else
	die("Connection failed: " . mysqli_connect_error());

$username=$_POST["user"];
$name=$_POST["name"];
$password=$_POST["pass"];
$email=$_POST["mail"];
$gender=$_POST["gen"];
$age=$_POST["age"];
$degree=$_POST["degree"];
$work=$_POST["work"];
$home=$_POST["home"];
$religion=$_POST["rel"];
$caste=$_POST["caste"];
$marital=$_POST["ms"];
$about=$_POST["about"];

if ($gender == "female")
  $sql="INSERT INTO matrimony.female(username,name,email,password,gender,age,qualifications,work,hometown,religion,caste,maritalstatus,about) VALUES('$username','$name','$email','$password','$gender','$age','$degree','$work','$home','$religion','$caste','$marital','$about')";
else
  $sql="INSERT INTO matrimony.male(username,name,email,password,gender,age,qualifications,work,hometown,religion,caste,maritalstatus,about) VALUES('$username','$name','$email','$password','$gender','$age','$degree','$work','$home','$religion','$caste','$marital','$about')";	

if (mysqli_query($conn, $sql)) {
	header("Location: homepage.html");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>