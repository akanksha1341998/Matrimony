<?php
session_start();
$con=mysqli_connect('localhost','root','','matrimony');
$un=$_SESSION['USER'];
$gender=$_SESSION['GEN'];

if($gender=="female")
{
	
	
	
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['a'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['a'] as $selected){

if($selected == 'newnme')
{ $name=$_POST['name'];
  if(isset($name))
	{
		$sql="UPDATE female SET name='$name' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newmail')
{ $mail=$_POST['mail'];
  if(isset($mail))
	{
		$sql="UPDATE female SET email='$mail' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newpswrd')
{ $pass=$_POST['pass'];
  if(isset($pass))
	{
		$sql="UPDATE female SET password='$pass' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newage')
{ $age=$_POST['age'];
  if(isset($age))
	{
		$sql="UPDATE female SET age='$age' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newdegree')
{ $degree=$_POST['degree'];
  if(isset($degree))
	{
		$sql="UPDATE female SET qualifications='$degree' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newwork')
{ $work=$_POST['work'];
  if(isset($work))
	{
		$sql="UPDATE female SET work='$work' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newhome')
{ $home=$_POST['home'];
  if(isset($home))
	{
		$sql="UPDATE female SET hometown='$home' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newrel')
{ $rel=$_POST['rel'];
  if(isset($rel))
	{
		$sql="UPDATE female SET religion='$rel' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newcaste')
{ $caste=$_POST['caste'];
  if(isset($caste))
	{
		$sql="UPDATE female SET caste='$caste' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newmar')
{ $mar=$_POST['mar'];
  if(isset($mar))
	{
		$sql="UPDATE female SET maritalstatus='$mar' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newabt')
{ $about=$_POST['abt'];
  if(isset($about))
	{
		$sql="UPDATE female SET about='$about' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}

}
}
}


}

else if($gender="male")
{
	
	
	
	
	
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['a'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['a'] as $selected){

if($selected == 'newnme')
{ $name=$_POST['name'];
  if(isset($name))
	{
		$sql="UPDATE male SET name='$name' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newmail')
{ $mail=$_POST['mail'];
  if(isset($mail))
	{
		$sql="UPDATE male SET email='$mail' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newpswrd')
{ $pass=$_POST['pass'];
  if(isset($pass))
	{
		$sql="UPDATE male SET password='$pass' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newage')
{ $age=$_POST['age'];
  if(isset($age))
	{
		$sql="UPDATE male SET age='$age' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newdegree')
{ $degree=$_POST['degree'];
  if(isset($degree))
	{
		$sql="UPDATE male SET qualifications='$degree' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newwork')
{ $work=$_POST['work'];
  if(isset($work))
	{
		$sql="UPDATE male SET work='$work' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newhome')
{ $home=$_POST['home'];
  if(isset($home))
	{
		$sql="UPDATE male SET hometown='$home' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newrel')
{ $rel=$_POST['rel'];
  if(isset($rel))
	{
		$sql="UPDATE male SET religion='$rel' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newcaste')
{ $caste=$_POST['caste'];
  if(isset($caste))
	{
		$sql="UPDATE male SET caste='$caste' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newmar')
{ $mar=$_POST['mar'];
  if(isset($mar))
	{
		$sql="UPDATE male SET maritalstatus='$mar' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}
if($selected == 'newabt')
{ $about=$_POST['abt'];
  if(isset($about))
	{
		$sql="UPDATE male SET about='$about' WHERE username='$un'";
		mysqli_query($con,$sql);
	}
}

}
}
}


}

mysqli_close($con);
header('Location:mypage.php');
?>