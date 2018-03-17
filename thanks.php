<?php
	session_start();
?>
<html>
	<head>
	<style>
 #errors {
   color: white;
   font-size: 60px;
   text-align: center;
}
</style>
	</head>
	<body background="../images/200.jpg">
	<p align="center"><u><font face="impact" size="25" color="red">Thanks,</font></u></p>
	
	
	
		<div id="errors"><?php echo $_SESSION["em"];?></div>
	
	
	<p align="center"><font face="impact" size="15" color="red">You are sucessfully logged in to your account...</font></p>
	</body>
</html>

