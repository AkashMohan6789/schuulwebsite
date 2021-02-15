<!DOCTYPE html>
<html>
	<head>
		<title>View Record</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/record.css"/>
		<link rel="shortcut icon" href="images/12-01-39-813860_user_512x512.png"/>
	<script src="js/valid.js"></script>
 </head>
 <body>
	<div class="main_div">
		<?php
			require('header.php');
			require('menu.php');
		?>
		
		<div class="home">
		
			<div>
				<h1 class="heading">View Record</h1>
			</div>
			
			<div id="table">
				<br>
				<br>
				<table id="record">
				<?php
					require('database.php');
					$query="SELECT * FROM student";
					$result=mysqli_query($conn,$query);
					if(mysqli_num_rows($result))
					{
						echo "<tr>";
						echo "<th>Serial_No.</th>";
						echo "<th>Course</th>";
						echo "<th>First_Name</th>";
						echo "<th>Middle_Name</th>";
						echo "<th>Last_Name</th>";
						echo "<th>Father's_Name</th>";
						echo "<th>Mother's_Name</th>";
						echo "<th>Gender</th>";
						echo "<th>Date_Of_Birth</th>";
						echo "<th>Category</th>";
						echo "<th>Religion</th>";
						echo "<th>Personal_Contact</th>";
						echo "<th>Parent_Contact</th>";
						echo "<th>Email</th>";
						echo "<th>Permanent_Address</th>";
						echo "<th>Permanent_City</th>";
						echo "<th>Permanent_District</th>";
						echo "<th>Permanent_State</th>";
						echo "<th>Permanent_Pincode</th>";
						echo "<th>Corresponding_Address</th>";
						echo "<th>Corresponding_City</th>";
						echo "<th>Corresponding_District</th>";
						echo "<th>Corresponding_State</th>";
						echo "<th>Corresponding_Pincode</th>";
						echo "<th>Aadhar</th>";
						echo "</tr>";
						
						while($row=mysqli_fetch_assoc($result))
						{
							echo "<tr>";
							echo "<td>".$row['serial_no']."</td>";
							echo "<td>".$row['course']."</td>";
							echo "<td>".$row['first_name']."</td>";
							echo "<td>".$row['middle_name']."</td>";
							echo "<td>".$row['last_name']."</td>";
							echo "<td>".$row['father_name']."</td>";
							echo "<td>".$row['mother_name']."</td>";
							echo "<td>".$row['gender']."</td>";
							echo "<td>".date("d-m-Y",strtotime($row['dob']))."</td>";
							echo "<td>".$row['category']."</td>";
							echo "<td>".$row['religion']."</td>";
							echo "<td>".$row['personal_contact']."</td>";
							echo "<td>".$row['parent_contact']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['permanent_address']."</td>";
							echo "<td>".$row['permanent_city']."</td>";
							echo "<td>".$row['permanent_district']."</td>";
							echo "<td>".$row['permanent_state']."</td>";
							echo "<td>".$row['permanent_pincode']."</td>";
							echo "<td>".$row['temporary_address']."</td>";
							echo "<td>".$row['temporary_city']."</td>";
							echo "<td>".$row['temporary_district']."</td>";
							echo "<td>".$row['temporary_state']."</td>";
							echo "<td>".$row['temporary_pincode']."</td>";
							echo "<td>".$row['aadhar']."</td>";
							echo "</tr>";
						}
					}
					else
					{
						echo "<center><p class='err'>No Record Found</p></center>";
					}
					mysqli_close($conn);
				?>
				</table>
				<br>
			</div>
			<br>
		</div>
		<?php require('footer.php');?>
	</div>
 </body>
</html>