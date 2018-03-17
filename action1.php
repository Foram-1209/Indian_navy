<?php
	
	session_start();
	
	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$mono = $_POST["mono"];
	$db = $_POST["db"];
	$em = $_POST["em"];
	$pass = $_POST["pass"];
	
	$conn = mysqli_connect("localhost","root","","project");
	
	$_SESSION["fname"]=$fname;
	
	// check the username exist or not
	
	$checkExist = "select * from admin where email ='".$em."' ";
	$checkSQL = mysqli_query($conn,$checkExist);
	if(mysqli_num_rows($checkSQL)){
		header("location:e.php?err");die;
	}
	else{
		 $insertQuery =  "INSERT INTO `admin` ( `first_name`, `middle_name`, `last_name`, `contact_no`, `dob`, `email`, `password`) VALUES ( '".$fname."', '".$mname."', '".$lname."', '".$mono."', '".$db."', '".$em."', '".$pass."')";
					
		
		$p=mysqli_query($conn,$insertQuery);
		//echo var_dump($p);
		header("location:thanks.php");die;
	}	
?>