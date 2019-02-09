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

$username = $_SESSION["USER"];
$gender = $_SESSION["GEN"];

if($gender=='female')
{
	$sql = "SELECT * FROM matrimony.female WHERE username='$username'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result);
}
else
	if($gender=='male')
{
	$sql = "SELECT * FROM matrimony.male WHERE username='$username'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result);
}

?>

<html>

<head>

<title>mydetails</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.segment{
	background:rgba(0,0,0,0.5);
	width:100%;
	border-radius:10px;
	vertical-align:middle;
	padding:3px;
	
	
}
.header {
    overflow: hidden;
     
	text-align: center;
	height:50px;
	width:100%;
}

/* Style the topnav links */
.header button {
    float: right;
    display: block;
    color: orange;
    text-align: right;
    padding: 5px 5px;
    text-decoration: none;
	background: rgba(0, 0, 0, 0.3);
}

/* Change color on hover */
.header a:hover {
    background-color: #ddd;
    color: black;
}
</style>
<script>

function add()
{
  var str=" ";
  //str=str+"<input type='checkbox' name='newnme' value='newnme'> Name<br> <input type='checkbox' name='newmail' value='newmail'> E-mail<br> <input type='checkbox' name='newpswrd' value='newpswrd'> Password<br> <input type='checkbox' name='newage' value='newage'> Age<br> <input type='checkbox' name='newdegree' value='newdegree'> Qualifications<br> <input type='checkbox' name='newwork' value='newwork'> Workplace<br> <input type='checkbox' name='newhome' value='newhome'> Hometown<br> <input type='checkbox' name='newrel' value='newrel'> Religion<br> <input type='checkbox' name='newcaste' value='newcaste'> caste<br> <input type='checkbox' name='newmar' value='newmar'> Marital Status<br> <input type='checkbox' name='newabt' value='newabt'> Tell about yourself<br> ";
  str="hello";
  document.getElementById("addf").innerHTML=str;
}

</script>
</head>

<body>
<div class="segment">
<center>
<font style="color:orange;family:cambria;size:25px;">
<div class="header">
<font size="4" face="cambria"><form method="post"><b><button style="font-weight:bold;text-align:center;width:150px;" formaction="select.php">Update</button></form>
</font>
</div>
<b><u style="font-size:25px;">Your personal information is as per given below:</u><br><br></b>
</font>
</center>

<br><br><br>
<center>
<table align="center" cellpadding="15" style="font-family:cambria;font-size:25px;">
<tr>
<td><b><font style="color:white;">Username:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $username;
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">Name:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["name"];
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">E-mail:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["email"];
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">Password:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["password"];;
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">Age:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["age"];
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">Qualifications:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["qualifications"];
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">Workplace:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["work"];
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">Hometown:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["hometown"];
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">Religion:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["religion"];
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">Caste:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["caste"];
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">Marital status:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["maritalstatus"];
?></font>
</td>
</tr>
<tr></tr><tr></tr>
<tr>
<td><b><font style="color:white;">About Yourself:</font></b>  &emsp;</td>
<td><font style="color:orange;">
<?php
echo $row["about"];
?></font>
</td>
</tr>
<tr></tr><tr></tr>
</table>
</center>
</font>
<br><br>
<center>
</center>
</div>
<br><br>


<?php
  $conn->close();
  ?>

</body>

</html>