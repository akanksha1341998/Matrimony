<?php
session_start();
?>
<html>
<head>

<style>
/* unvisited link */
a:link {
    color: orange;
}

/* visited link */
a:visited {
    color: yellow;
}

/* mouse over link */
a:hover {
    color: white;
}

/* selected link */
a:active {
    color: pink;
}
.segment{
	background:rgba(255,255,255,0.4);
	width:100%;
	border-radius:10px;
	vertical-align:middle;
	padding:3px;
	
	
}
.topheader{
	background-color:black;
	width:100%;
	height:40px;
	padding:3px;
	vertical-align:middle;
}
</style>

</head>
<body>
<?php
$con=mysqli_connect('localhost','root','','matrimony');
$gender=$_SESSION['GEN'];
//echo $gender;
if($gender == 'female')
{
	$sql="SELECT * FROM male";
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{	
			
			$passon = $row["name"];
			echo "<div class='segment'><font style='color:white;font-family:cambria;font-size:20px;'><br><div class='topheader'><b><a href='display.php?pass_id=".$passon."'>".$row['name']."</div></b></a><br><br>Works in ".$row['work']."<br>Lives in ".$row['hometown']."</font></div><br<br><br>";
		}
	}
}

//<a href=view_exp.php?compna=",urlencode($compname),">$compname</a> ".$rows['user']."
elseif($gender == 'male') 
{
	//echo "hey";
	$sql="SELECT * FROM female";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{	
			
			$passon = $row["name"];
			echo "<div class='segment'><font style='color:white;font-family:cambria;font-size:20px;'><br><br><div class='topheader'><b style='background-color: black;'><a href='display.php?pass_id=".$passon."'>".$row['name']."</b></div></a><br><br>Works in ".$row['work']."<br>Lives in ".$row['hometown']."</font></div><br<br><br>";
		}
	}
	
}
mysqli_close($con);
?>
</body>
</html>