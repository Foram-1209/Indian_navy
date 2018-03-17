<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/a.css">
		
		<script type="text/javascript">
		var i=0;
		
		function next(){
			var arr=["../images/1.jpg","../images/2.jpg","../images/3.jpg","../images/4.jpg","../images/5.jpg","../images/6.jpg"];
			document.getElementById("a").src=arr[i];
			
			i++;
			if(i>5)
			i=0;
		}
		</script>
	</head>
	  
	<body class="bg" onload="setInterval('next();',2000);">
		<p align="center" class="f1">Home</p>
		<table border="1" class="abc bg2 f2">
		<tr>
			<td>
			
				<table align="center" cellpadding="20"> 
					<thead>
						<tr class="bg2 f3">
							<td><a href="b.php">About us</a></td>
							<td><a href="c.php">What we do</a></td>
							<td><a href="d.php">Organization</a></td>
							<td><a href="e.php">Contact us</a></td>
						</tr>
					</thead>
				</table>
				
			</td>
		</tr>
		<tbody>
		<tbody>
			<tr>
				<td align="center">
					<img src="../images/14.jpg"/>
				</td>
			</tr>
			<tr>
				<td>
						<p align="center"><img  id="a" src="../images/1.jpg" title="Navy's Theatre Level Exercise,TROPEX 17" height="400" width="800"/></p>
						<!--<img align="center" src="../images/6.jpg" height="500" title="Indian Navy Aircrafts in Formation" width="95%"/>-->
				</td>
			</tr>
			<tr>
				<td height="80" align="center">
							<p align="center"><font size="6"><u>Recent Events</u></font></p>
				</td>
			</tr>
			<tr>
				<td height="80" align="center">
				
						    <a href="a1.php">INS Sumitra awarded Special Search and Rescue (SAR) Award by NMSAR</a><br> 
							12/07/2017
				</td>
			</tr>
			<tr>
				<td height="80" align="center">
							
							<a href="a2.php">Exercise Malabar commences in Bay of Bengal/ North Indian Ocean</a><br>
							10/07/2017
				</td>
			</tr>
			<tr>
				<td height="80" align="center">
							
							<a href="a3.php">Visit of Royal Australia Navy Ship to Kochi</a><br>
							04/07/2017
				</td>
			</tr>
			<tr>
				<td height="80" align="center">
							
							<a href="a4.php">Launch of L&T Yard 55000 (Floating Dock - FDN 2)</a><br> 
							20/06/2017
				</td>
			</tr>
			<tr>
				<td height="80" align="center">
							
							<a href="a5.php">Eastern Fleet Ships enter Freemantle to participate in AUSINDEX-17, a bilateral maritime exercise with Australian Navy</a><br> 
							13/06/2017
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td>
					<img align="center" src="../images/31.jpg"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img align="center" src="../images/32.jpg"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img align="center" src="../images/33.jpg"/>
				</td>
			</tr>
		</tfoot>
		</table>
	</body>
</html>