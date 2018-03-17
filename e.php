
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/a.css">
		
		<script type="text/javascript">
		
			function change()
			{
				var v=/^[a-zA-Z0-9_#$]+\@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
				
				//var u1=document.getElementById("r1").value;
				//var u2=document.getElementById("r2").value;
				var u3=document.getElementById("r3").value;
				/*var u4=document.getElementById("r4").value;
				var u5=document.getElementById("r5").value;-->*/
				var u6=document.getElementById("r6").value;
				var u7=document.getElementById("r7").value;
				var u8=document.getElementById("r8").value;
				var u9=document.getElementById("r9").value;
				
			
			/*	if(v.test(u1)==false || u1=="")
				{
					document.getElementById("d1").innerHTML = "Enter valid Username";				
				}
				else
				{
					document.getElementById("d1").innerHTML = "";				
				}*/

				if(v.test(u7)==false || u7=="")
				{
					document.getElementById("d7").innerHTML = "Enter valid Username";				
				}
				else
				{
					document.getElementById("d7").innerHTML = "";	
				}
				
				
			
			/*	if(u2=="")
				{
					document.getElementById("d2").innerHTML = "Enter your Password";				
				}
				else
				{
					document.getElementById("d2").innerHTML = "";				
				}*/
				if(u3=="")
				{
					document.getElementById("d3").innerHTML = "Enetr your First_name";				
				}
				else
				{
					document.getElementById("d3").innerHTML = "";				
				}
				if(u6=="")
				{
					document.getElementById("d6").innerHTML = "Enetr your Contact_number";				
				}
				else
				{
					document.getElementById("d6").innerHTML = "";				
				}
				if(u8=="")
				{
					document.getElementById("d8").innerHTML = "Enetr your Password";				
				}
				else
				{
					document.getElementById("d8").innerHTML = "";				
				}
				if(u9=="")
				{
					document.getElementById("d9").innerHTML = "Comfirm your Password";
				}
				else
				{
					document.getElementById("d9").innerHTML = "";
				}
			}
		</script>
	</head>
	
	<body class="bg">
		<p align="center" class="f1">Contact Us</p>
		
		<table border="1" class="abc bg2 f2">
			<tr>
				<td align="center">
					<img src="../images/14.jpg"/>
				</td>
			</tr>
			<tr>
				<td class="f3 pqr">
					<p align="center"><u><font size="6">Recruitment</font></u></p>
				</td>
			</tr>
			<form  method="post" action="action1.php">
			<tr>
				<td>
					<p align="center"><img  align="center" src="../images/107.jpg"></p>
				</td>
			</tr>
				<td class="pqr">
					<p align="center">
						<p align="center"><font size="4" face="impact">Why you want to join Indian navy:<input type="text"><br><br>
						*If you don't  have an account you can signup here...!!<br><br>
						<!--Email address:<input name="em" placeholder="enter your email address" id="r1"><span id="d1" style="color: red; font-size: 16px; font-family: 'Times New Roman';"></span><br><br>
						Password:<input type="password" placeholder="password" id="r2" name="pass"><span id="d2" style="color: red; font-size: 16px; font-family: 'Times New Roman';"></span><br><br>-->
				</td>
			</tr>
			<tr>
				<td class="f3 pqr">
					<p align="center"><u><font size="6">PERSONAL DETAILS</font></u></p>
				</td>
			</tr>
			<tr>
				<td class="pqr">
						First name*:<input name="fname" placeholder="enter your fname" id="r3"><span id="d3" style="color: red; font-size: 16px; font-family: 'Times New Roman';"></span><br><br>
						Middle name:<input name="mname" placeholder="enter your mname" id="r4"><span id="d4"></span><br><br>
						Last name:<input name="lname" placeholder="enter your lname" id="r5"><span id="d5"></span><br><br>
						Contact no*:<input name="mono" placeholder="enter your cont.no" maxlength="10" id="r6"><span id="d6" style="color: red; font-size: 16px; font-family: 'Times New Roman';"></span><br><br>
						Gender*:Male<input name="gen" type="radio">&nbsp&nbsp&nbsp&nbsp Female<input name="gen" type="radio"><br><br>
						Date of Birth*:<input name="db" placeholder="enter your DOB" id="r10"><span id="d10"></span><br><br>
						Marital Status*:Married<input name="abc" type="radio">&nbsp&nbsp&nbsp&nbsp Single<input name="abc" type="radio"><br><br>
			<tr>
				<td class="f3 pqr">
					<p align="center"><u><font size="6">EDUCATIONAL DETAILS</font></u></p>
				</td>
			</tr>
			<tr>
				<td class="pqr">
						Highest Qualification:<br><select>
														<option>M.Tech</option>
														<option>B.tech</option>
														<option>Diploma Engineering</option>
														<option>MSC</option>
														<option>BSC</option>
														<option>MBA</option>
														<option>BBA</option>
														<option>MA</option>
														<option>BA</option>
														<option>LLB</option>
														<option>12th commerce</option>
														<option>12th science</option>
														<option>10th</option>
														<option>9th</option>
														<option>8th</option>
														<option>7th</option>
												</select><br><br>
						Additional Qualification:<br><select>
															<option>Diploma in sports coaching</option>
															<option>NIS</option>
															<option>B.sc in maths</option>
															<option>M.sc in physics</option>
															<option>Post graduate diploma(Finance)</option>
															<option>Post graduate diploma(Material management)</option>
															<option>Post graduate diploma(Logistics)</option>
													 <select><br><br>
						
			<tr>
				<td class="f3 pqr">
					<p align="center"><u><font size="6">Account Details</font></u></p>
				</td>
			</tr>
			<tr>
				<td class="pqr">		
						Email address:<input name="em" placeholder="enter your email address" id="r7"><span id="d7" style="color: red; font-size: 16px; font-family: 'Times New Roman';"></span><br><br>
						<?php
							if(isset($_GET["err"])){
								echo "Email_Address already exist";
							}
						?><br><br>
						Password:<input type="password" placeholder="Password" id="r8" name="pass"><span id="d8" style="color: red; font-size: 16px; font-family: 'Times New Roman';"></span><br><br>
						Confirm password:<input type="password" placeholder="Confirm Password" id="r9"><span id="d9" style="color: red; font-size: 16px; font-family: 'Times New Roman';"></span><br><br>
				</td>
			</tr>
			<tr>
				<td>
					SUSCRIBE TO ENTRY ALERTS<br><br>
					<input type="checkbox">I agreee to suscribe to alerts for entry oprnings.<br>
					<input type="checkbox">I agree to terms and conditions.<br><br>
					<p align="center"><input type="submit" value="submit" onclick="javascript:return change();"></p>
				</td>
			</tr>
			</form>
			<tr>
				<td>
					<p align="center"><font size="6" color="white"><a href="a.php">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="b.php">About Us</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="c.php">What We Do</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="d.php">Organization</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="e.php">Contact us</a></font></p>
				</td>
			</tr>
			<tr>
				<td class="pqr">
					<img align="center" src="../images/31.jpg"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img align="center" src="../images/32.jpg"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img align="center" src="../images/33.jpg"/>
				</td>
			</tr>
		</table>
	</body>	
</html>
	
	