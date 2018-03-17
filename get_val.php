<?php
	session_start();
	
	

		$em = $_POST["em"];
		$pass = $_POST["pass"];
		
		$conn = mysqli_connect('localhost','root','','project')or die (mysqli_error());
		
		$_SESSION["em"]=$em;
		
		$checkExist = "select * from admin where email ='".$em."'and password='".$pass."'";
		$checkSQL = mysqli_query($conn,$checkExist);
		
		$numrows=mysqli_num_rows($checkSQL);
		if($numrows!=0)
		{
			while($row=mysqli_fetch_assoc($checkSQL))
			{
				$dbemail=$row["email"];
				$dbpassword=$row["password"];
			}
			if($em==$dbemail && $pass==$dbpassword)
			{
				header("location:../HTML/thanks.php");die;
			}
		}
		else
		{
			header("location:login.php?err");die;
		}
	
			
?>