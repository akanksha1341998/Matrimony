<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body {
  margin: 3px;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
    overflow: hidden;
     background: rgba(0, 0, 0, 0.3);
	text-align: center;
	height:90px;
	width:82.5%;
}

/* Style the topnav links */
.topnav button {
    float: right;
    display: block;
    color: orange;
    text-align: right;
    padding: 5px 5px;
    text-decoration: none;
	background: rgba(0, 0, 0, 0.3);
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
.content {
  padding: 16px;
  background-image:url("image/final.jpg");
  height:600px;
	background-repeat: no-repeat;
	background-size: cover;
   align:center;
   text-align:center;
}
.article1 {
	background: rgba(0, 0, 0, 0.3);
	text-align: center;
	color: white;
	padding: 20px;
	width:82.5%;
	align:center;
	
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
td{
height: 50px;
width:100px;
font-size:20px;
color:white;
}
/* Style the footer */
.footer {
        background-color: black;
    padding: 20px;
    text-align: center;
	height:100px;
	color: white;
	margin: 5px 0px 0px 0px;
}

.row:after{
	content: "";
	display: table;
	clear: both;
}
</style>
</head>
<body>
<div class="content">
<center>

<div class="topnav">
<img src="image/weddinglogo.png" align="left" style="height:70px;width:200px;"> 
 <font size="4" face="cambria"><b><a href="homepage.html"><button><img src="image/home.png" style="height:50px;width:50px;" align="middle">Home</button></a>
</font>
<div>  
</center> 
<center>                                             
<div class="article1">
<?php
$uid=$_POST['uname'];
$pword=$_POST['psw'];
$con=mysqli_connect('localhost','root','','matrimony');
$sql="SELECT * FROM male where username='$uid' and password='$pword'";
$result=mysqli_query($con,$sql);
$sql2="SELECT * FROM female where username='$uid' and password='$pword'";
$result2=mysqli_query($con,$sql2);

if(mysqli_num_rows($result)>0)
{	
	$row = mysqli_fetch_assoc($result);
	$_SESSION["USER"]=$uid;
	$_SESSION["NAME"]=$row['name'];
	$_SESSION["GEN"]=$row['gender'];
	$_SESSION["EMAIL"]=$row['email'];
	mysqli_close($con);
	header('Location:userhome.php');
}
else if(mysqli_num_rows($result2)>0)
{	
	$row = mysqli_fetch_assoc($result2);
	$_SESSION["USER"]=$uid;
	$_SESSION["NAME"]=$row['name'];
	$_SESSION["GEN"]=$row['gender'];
	mysqli_close($con);
	$_SESSION["EMAIL"]=$row['email'];
	header('Location:userhome.php');
}
else
{
		echo"<center>
		<form action='login.php' method='post'>
	<fieldset>
	<img src='image/usericon.png' style='height:90px;width:80px;'><br>
	<p style='font-size:15px ;color:red;'>Wrong credentials..Try Again</p>
	<b style='font-size:20px;'>USERNAME</b><br><br>
	<input type='text' name='uname' required><br><br><br>
	<b style='font-size:20px;'>PASSWORD</b><br><br>
	<input type='password' name='psw' required><br><br><br>
	<input type='submit' value='Login'>   <input type='reset'>
	</fieldset>
	</form>
	</center></div>
		";
}
?>
<div class="footer">
  <p>&copy; 2018 MAGICAL WEDDINGS. All rights reserved.</p>

</div>

</body>
</html>