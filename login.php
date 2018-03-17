<html>
	<head></head>
	
	<body background="../images/201.jpg">
		<form method="post" action="get_val.php">
		<table border="1" align="center">
			<tr>
				<td colspan="2"><p align="center"><font size="4" face="impact">Account login</font></p></td>
			</tr>
			<tr>
				<td><font size="4" face="impact">Email:</font></td>
				<td><input type="text" name="em"></td><br><br>
			</tr>
			<tr>
				<td><font size="4" face="impact">password:</font></td>
				<td><input type="password" name="pass"></td><br><br>
			</tr>
			<tr>
				<td colspan="2"><p align="center"><input type="submit" value="login"></td><br><br>
			</tr>
		</table>
		<p align="center">
		<?php
		if(isset($_GET["err"])){
								echo "Invalid username or password";
							}
							?></p>
	</body>
</html>