<?php
session_start();
?>
<html>
<head>
<style>
.segment{
	background:rgba(0,0,0,0.5);
	width:100%;
	border-radius:10px;
	padding:5px;
	text-align:center;
	
	
}
</style>
</head>
<body>
<div class="segment">
<?php


$con=mysqli_connect('localhost','root','','matrimony');

$gen=$_SESSION['GEN'];
//echo $match;
$ans=$_GET["pass_id"];
//echo $ans;
if($gen =='female')
{
	
	$sql="SELECT * FROM male WHERE name='$ans'";
	$result=$con->query($sql);
	$row=mysqli_fetch_array($result);
	echo "<table style='font-family:Cambria;color:orange;font-size:20px;' ><tr><td style='color:white;font-family:Cambria;font-size:20px;'>NAME</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['name'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>USERNAME</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['username'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>AGE</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['age'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>QUALIFICATION</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['qualifications'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>WORKS IN</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['work'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>LIVES IN</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['hometown'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>RELIGION</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['religion'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>CASTE</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['caste'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>MARITIAL STATUS</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['maritalstatus'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>ABOUT HIM</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['about']."</td></tr></table>";
		mysqli_close($con);

	
}
else if($gen =='male')
{
	//$con=mysqli_connect('localhost','root','','matrimony');
	$sql="SELECT * FROM female WHERE name='$ans'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	echo "<table><tr><td style='color:white;font-family:Cambria;font-size:20px;'>NAME</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['name'].	
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>USERNAME</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['username'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>AGE</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['age'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>QUALIFICATION</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['qualifications'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>WORKS IN</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['work'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>LIVES IN</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['hometown'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>RELIGION</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['religion'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>CASTE</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['caste'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>MARITIAL STATUS</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['maritalstatus'].
		"</td></tr><tr><td style='color:white;font-family:Cambria;font-size:20px;'>ABOUT HER</td><td style='color:orange;font-family:Cambria;font-size:20px;'>".$row['about']."</td></tr></table>";
		mysqli_close($con);

	
}
?>
</div>
</body>
</html>