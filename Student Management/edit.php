<!DOCTYPE html>
<html>
 <head>
  <title>Edit Record</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/admission.css"/>
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
			<h1 class="heading">Edit Record</h1>
			<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post" name="serial" onsubmit="return edit()">
			<center>
				<table style="width:40%;">
					<tr>
						<td style="font-size:20px;">Serial Number:</td>
						<td><input type="text" class="text" name="serial_no" value="<?php if(isset($_POST['serial_no']))echo $_POST['serial_no']; ?>" onkeypress="return isNumber(event)"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"></br><input type="submit" value="submit" name="submit" class="btn"></td>
					</tr>
				</table>
			</center>
			</form>
			<?php
				session_start();
						
				if(isset($_POST['submit'])){
					$_SESSION['id']=$_POST['serial_no'];
					require('database.php');
					$var=$_POST['serial_no'];
					$query="select * from student where serial_no=$var;";
					$result=mysqli_query($conn,$query);
					if(mysqli_num_rows($result))
					{
						$row=mysqli_fetch_assoc($result);
						$course=$row['course'];
						$firstname=$row['first_name'];
						$middlename=$row['middle_name'];
						$lastname=$row['last_name'];
						$fathername=$row['father_name'];
						$mothername=$row['mother_name'];
						$gender=$row['gender'];
						$dateofbirth=$row['dob'];
						$category=$row['category'];
						$religion=$row['religion'];
						$personalcontact=$row['personal_contact'];
						$parentcontact=$row['parent_contact'];
						$email=$row['email'];
						$permanentaddress=$row['permanent_address'];
						$permanentcity=$row['permanent_city'];
						$permanentdistrict=$row['permanent_district'];
						$state=$row['permanent_state'];
						$permanentpincode=$row['permanent_pincode'];
						$temporaryaddress=$row['temporary_address'];
						$temporarycity=$row['temporary_city'];
						$temporarydistrict=$row['temporary_district'];
						$temporarystate=$row['temporary_state'];
						$temporarypincode=$row['temporary_pincode'];
						$aadharno=$row['aadhar'];
					}
					else
						$error="No Record Found";
					
					mysqli_close($conn);
					
				
				
					if(isset($error)){
						echo "<p align='center' class='err'>".$error."<p>";
					}
					else{
						echo"<br>";
						require('files/editform.php');
					}
				}
				else{
					if(isset($_GET['Message']))
					{
						echo "<center><p class='err'>".$_GET['Message']."</p></center> ";
						unset($_GET['Message']);
					}
				}
			?>
		</div>
		<?php require('footer.php');?>
	</div>
 </body>
</html>