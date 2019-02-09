<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 3px;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}



/* Style the top navigation bar */
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
  height:800px;
	background-repeat: no-repeat;
	background-size: cover;
  text-align:center;
}
.article1 {
	background: rgba(0, 0, 0, 0.1);
	text-align: center;
	color: white;
  border:1px solid black;
	padding: 20px;
	width:82.5%;
	
	
}
.article2{
	 overflow: hidden;
    
	background: rgba(0, 0, 0, 0.3);
	text-align: center;
	height:50px;
	width:82.5%;
	
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.bottom-left {
    position: absolute;
    bottom: 110px;
    left: 50px;
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



button:hover {
    opacity: 0.8;
}
.column {
    float: left;
    padding: 10px;
	
}

/* Left and right column */
.column.left {

    width: 15%;
	
	/*border: 3px solid red;*/
	
}

/* Middle column */
.column.right {
/*border: 3px solid red;*/
    width: 80%;
	text-align: center;
	height: 650px;
}

.row:after{
		content: "";
	display: table;
	clear: both;
}

</style>
<script>
function takevalue()
{
	var st2="<form action='contact1.php' method='post' target='frame_main'><b style='color:white;'>ENTER USER NAME </b><input type='text' name='uname' style='font-size:15px;width:100px;height:20px;border-radius:5px;'><br><br> <input type='submit' value='SEND' style='background:rgba(0,0,0,0.8);color:white;font-size:15px;width:100px;height:30px;border-radius:5px;'></form>";
	document.getElementById("disp2").innerHTML = st2;
}
</script>
</head>
<body>
<div class="content">
<center>

<div class="topnav">
<img src="image/weddinglogo.png" align="left" style="height:70px;width:200px;"> 
<font size="4" face="cambria"><b><a href="delete.php"><button style="text-align:center;font-weight:bold;width:150px;"><img src="image/remove.png" style="height:30px;width:30px;" align="middle"> Delete Account</button></a>
</font>
<font size="4" face="cambria"><b><a href="viewcontact.php"target='frame_main'><button style="text-align:center;font-weight:bold;width:150px;"><img src="image/msg.png" style="height:30px;width:30px;" align="middle"> Notification</button></a>
</font>
<font size="4" face="cambria"><b><a href="homepage.html"><button style="text-align:center;font-weight:bold;width:150px;"><img src="image/home.png" style="height:30px;width:30px;" align="middle"> Log Out</button></a>
</font>
</div>  

<div class="article2">
<marquee style="color:orange;font-family:Segoe Script;">Welcome  &nbsp; <?php echo $_SESSION["NAME"];?></marquee>
</div>
</center> 

<div class="row">


<div class="column left"><br>
<form action="mypage.php" target="frame_main">
<button style="background-color:rgba(0, 0, 0, 0.8);color:orange;font-size:20px;width:90%;height:20%;border-radius:6px;"><img src="image/myself.png" style="height:50px;width:50px;" align="middle"><b> My Profile</b></button>
</form><br><br>
<form action="match.php" target="frame_main">
<button style="background-color:rgba(0, 0, 0, 0.8);color:orange;font-size:20px;width:90%;height:20%;border-radius:6px;"><img src="image/mf.png" style="height:50px;width:50px;" align="middle"><b> Matches</b></button>
</form>
<br><br>

<button  onclick="takevalue()" style="background-color:rgba(0, 0, 0, 0.8);color:orange;font-size:20px;width:90%;height:20%;border-radius:6px;"><img src="image/contact.png" style="height:50px;width:50px;" align="middle"><b> Contact</b></button>
<p id="disp2"></p>

</div>

<div class="column right">
<iframe  width="100%" height="100%" name=frame_main>
</iframe>
</div>


</div>  

                                        
</div>
<div class="footer">
  <p>&copy; 2018 MAGICAL WEDDINGS. All rights reserved.</p>

</div>


</body>
</html>