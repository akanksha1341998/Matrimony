<html>
<head>
<style>
.segment{
	background:rgba(0,0,0,0.5);
}
</style>
</head>
<body>

<div class='segment'>
<?php
session_start();
$con=mysqli_connect('localhost','root','','matrimony');
$un=$_SESSION["USER"];
$gender=$_SESSION["GEN"];
$sql="SELECT * from contactnow WHERE rname='$un'";
$result=mysqli_query($con,$sql);


	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo"<h1 style='text-align:center;color:yellow;'><u>So it looks like someone is intrested!!!</u></h1><br><br><br><center><table style='font-weight: bold;font-size:25px;color:white;'><tr><td>".$row['name']."</td></tr><tr><td></td></tr>"."<tR><td>".$row['semail']."</td></tr></table></center><hr>";

		}
	}
mysqli_close($con);

?>
</div>
</body>
</html>