<?php
	$conn  = mysqli_connect("localhost","root","","project");
	
	$selectQuery = "select * from admin";
	
	$ResourceID = mysqli_query($conn , $selectQuery);
	if(mysqli_num_rows($ResourceID)){
		$table = "<table  border='1'>";
		$table .= "<tr>	
						<th>first_name</th>
						<th>middle_name</th>
						<th>last_name</th>
						<th>contact_no</th>
						<th>dob</th>
						<th>email</th>
						<th>password</th>
					</tr>";
					
		while($result = mysqli_fetch_assoc($ResourceID)){	
			$table .= "<tr>	
							<td>".$result["first_name"]."</td>
							<td>".$result["middle_name"]."</td>
							<td>".$result["last_name"]."</td>
							<td>".$result["contact_no"]."</td>
							<td>".$result["dob"]."</td>
							<td>".$result["email"]."</td>
							<td>".$result["password"]."</td>
						</tr>";	
						
		}
		$table .= "</table>";
	}
	
	
	echo $table;
?>