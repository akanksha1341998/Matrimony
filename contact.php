<html>
<head>
	<!-- <script type="text/javascript">
            function getTF()
            {
                var html = "";
                html += "Enter Name: <input type='text'  name='s1' id='s1' value=''/>          Enter Email:- <input type='text' name='t1' id='t1' value=''/>  <hr/><br/><br/>'";
                document.getElementById('d1').innerHTML = html;
            }
    </script> -->
</head>
<body>
	<!-- <?php
		$_SESSION["USER"]=$uid;
		$_SESSION["EMAIL"]=$row['email'];
	?> -->
	<form action="contact1.php" method="POST">
		<table>
			<tr>
				<td><label>Enter UserName</label></td>
				<td><input type="text" name="UName" id="UName"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="submit"/></td>
			</tr>
		</table>
	</form>
</body>
</html>