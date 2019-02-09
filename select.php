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
?>

<html>

<head>
<title>select</title>
<style>
.segment{
	background:rgba(0,0,0,0.5);
	width:100%;
	border-radius:10px;
	padding:5px;
	text-align:center;
	
	
}
</style>
<script>

function newname()
{
	//var checkBox = document.getElementById("nn");
	var str=" ";
	str=str+"<input type='text' name='name'>";
	document.getElementById("name").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function mail()
{	
	//var checkBox = document.getElementById("ml");
	var str=" ";
	str=str+"<input type='text' name='mail'>";
	document.getElementById("mail").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function pswrd()
{	
	//var checkBox = document.getElementById("pword");
	var str=" ";
	str=str+"<input type='text' name='pass'>";
	document.getElementById("pass").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function age()
{
	//var checkBox = document.getElementById("age");
	var str=" ";
	str=str+"<input type='text' name='age'>";
	document.getElementById("age").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function degree()
{	
	//var checkBox = document.getElementById("deg");
	var str=" ";
	str=str+"<input type='text' name='degree'>";
	document.getElementById("degree").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function work()
{
	//var checkBox = document.getElementById("wor");
	var str=" ";
	str=str+"<input type='text' name='work'>";
	document.getElementById("work").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function home()
{	
	//var checkBox = document.getElementById("hom");
	var str=" ";
	str=str+"<input type='text' name='home'>";
	document.getElementById("home").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function rel()
{	
	//var checkBox = document.getElementById("reli");
	var str=" ";
	str=str+"<input type='text' name='rel'>";
	document.getElementById("rel").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function caste()
{	
	//var checkBox = document.getElementById("cas");
	var str=" ";
	str=str+"<input type='text' name='caste'>";
	document.getElementById("caste").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function mar()
{
	//var checkBox = document.getElementById("mart");
	var str=" ";
	str=str+"<input type='text' name='marital'>";
	document.getElementById("marital").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function abt()
{
	//var checkBox = document.getElementById("abt");
	var str=" ";
	str=str+"<input type='text' name='about'>";
	document.getElementById("about").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
</script>

</head>

<body style="font-size:25px;color:white;">
<div class="segment">
Select options to update:
<form method="post" action="update.php">
<table style="font-size:25px;color:white;">
<tr>
<td><input type='checkbox' name='a[]' value='newnme' onchange="newname()" > Name &emsp;</td><td><b id="name"></b><br></td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='newmail' onchange ="mail()" > E-mail &emsp; </td><td><b id="mail"></b><br></td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='newpswrd' onchange ="pswrd()"> Password</td><td> <b id="pass"></b> <br> </td>
</tr>
<tr>
<tr>
<td><input type='checkbox' name='a[]' value='newage' onchange ="age()" > Age</td><td> <b id="age"></b><br> </td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='newdegree' onchange ="degree()" > Qualifications </td><td><b id="degree"></b><br> </td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='newwork' onchange ="work()" > Workplace</td><td> <b id="work"></b><br> </td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='newhome' onchange="home()" > Hometown </td><td><b id="home"></b><br></td>
</tr>
<tr> 
<td><input type='checkbox' name='a[]' value='newrel' onchange="rel()" > Religion</td><td> <b id="rel"></b><br> </td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='newcaste' onchange="caste()" > caste</td><td><b id="caste"></b><br></td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='newmar' onchange="mar()" > Marital Status</td><td><b id="marital"></b><br> </td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='newabt' onchange="abt()" > Tell about yourself</td><td><b id="about"></b><br></td>
</tr>
<tr>
<td>
</td>
</tR>
<tr>
<td><!--<button type="submit" formaction="homepage.html">Submit</button>--><input style="font-size:15px;font-weight:bold;background-color:black;color:orange;padding:5px 3px;width:100px;height:40px;border-radius:10px;" type="submit" name="submit" value="UPDATE"></td>
</tr>
</table>
</form>
</div>
</body>
</html>