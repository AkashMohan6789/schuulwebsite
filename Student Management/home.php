<!DOCTYPE html>
<html>
 <head>
  <title>New Admission</title>
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
			<h1 class="heading">Admission Form</h1>
			
			<?php
				if(isset($_POST['submit']))
				{
					require('files/variable.php');
					require('database.php');
					$query1="INSERT INTO student(course,first_name,middle_name,last_name,father_name,mother_name,gender,dob,category,religion,personal_contact,parent_contact,email,permanent_address,permanent_city,permanent_district,permanent_state,permanent_pincode,temporary_address,temporary_city,temporary_district,temporary_state,temporary_pincode,aadhar,sem) VALUES('$course','$firstname','$middlename','$lastname','$fathername','$mothername','$gender','$dateofbirth','$category','$religion','$personalcontact','$parentcontact','$email','$permanentaddress','$permanentcity','$permanentdistrict','$state','$permanentpincode','$temporaryaddress','$temporarycity','$temporarydistrict','$temporarystate','$temporarypincode','$aadharno',1)";
					if(!mysqli_query($conn,$query1)) 
						die(mysqli_error($conn));
					else
					{
						$message="Record Inserted";
						echo "<center><p class='err'>$message<p><br></center>";
					}
					mysqli_close($conn);
				}
			?>
			
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" name="record" onsubmit="return test();" >
				<table cellspacing="0">
					<tr>
						<th colspan="6">Personal Details</th>
					</tr>
					<tr>
						<td>Course<span class="mandatory">*</span></td>
						<td>
							<select class="text" name="course">
								<option value="BCA">BCA</option>
								<option value="BCA">BSC</option>
								<option value="BCA">BCOM</option>
								<option value="BCA">BPHARMA</option>
								<option value="BCA">MCA</option>
								<option value="BCA">MCOM</option>
								<option value="BCA">BTECH</option>
								<option value="BCA">BSC</option>
								<option value="BCA">MSC</option>
								<option value="BCA">PHD</option>
								<option value="BCA">MSC CS</option><option value="BCA">BBA</option>
								<option value="BCA">MBA</option>
							</select>
						</td>
						<td colspan="4"></td>
					</tr>
					<tr>
						<td>First Name<span class="mandatory">*</span></td>
						<td><input type="text" class="text" name="first_name" onkeypress="return isName(event);" /></td>
						<td>Middle_Name</td>
						<td><input type="text" class="text" name="middle_name" onkeypress="return isName(event);" /></td>
						<td>Last_Name<span class="mandatory">*</span></td>
						<td><input type="text" class="text" name="last_name" onkeypress="return isName(event);" /></td>
					</tr>
					<tr>
						<td>Father's Name<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="father_name" onkeypress="return isParent(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>Mother's Name<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="mother_name" onkeypress="return isParent(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>Gender<span class="mandatory">*</span></td>
						<td>
							<input checked type="radio" name="gender" value="Male"/>Male&nbsp;
							<input type="radio" name="gender" value="Female"/>Female&nbsp;
							<input type="radio" name="gender" value="Other"/>Other
						</td>
						<td></td>
						<td>Date of Birth<span class="mandatory">*</span></td>
						<td colspan="2"><input type="date" class="text" name="date_of_birth"/></td>
					</tr>
					<tr>
						<td>Category<span class="mandatory">*</span></td>
						<td colspan="5">
							<select name="category">
								<option value="General">General</option>
								<option value="Scheduled Caste">Scheduled Caste</option>
								<option value="Scheduled Tribe">Scheduled Tribe</option>
								<option value="Other Backward Class">Other Backward Class(OBC)</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Religion<span class="mandatory">*</span></td>
						<td colspan="5">
							<select name="religion">
								<option value="Hinduism">Hinduism</option>
								<option value="Christianity">Christianity</option>
								<option value="Islam">Islam</option>
								<option value="Sikhism">Sikhism</option>
								<option value="Buddhism">Buddhism</option>
								<option value="Jainism">Jainism</option>
								<option value="Other">Other</option>
							</select>
						</td>
					</tr>
					<tr>
						<th colspan="6">Contact Details</th>
					</tr>
					<tr>
						<td>Personal Contact<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" maxlength="10" name="personal_contact" onkeypress="return isNumber(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>Parent's Contact<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" maxlength="10" name="parent_contact" onkeypress="return isNumber(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>E-mail<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="email"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<th colspan="6">Permanent Address Details</th>
					</tr>
					<tr>
						<td>Address<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="permanent_address"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>City<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="permanent_city" onkeypress="return isParent(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>District<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="permanent_district" onkeypress="return isParent(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>State<span class="mandatory">*</span></td>
						<td colspan="2">
							<select name="state">
								<option value="Andaman and Nicobar">Andaman and Nicobar</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chandigarh">Chandigarh</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
								<option value="Daman and Diu">Daman and Diu</option>
								<option value="Delhi">Delhi</option>
								<option value="Goa">Goa</option>
								<option value="Gujrat">Gujrat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">Himachal Pradesh</option>
								<option value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerla">Kerla</option>
								<option value="Lakshdweep">Lakshdweep</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharastra">Maharastra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalay">Meghalay</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Odisha">Odisha</option>
								<option value="Puducherry">Puducherry</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Sikkim">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="Uttarakhand">Uttarakhand</option>
								<option value="West Bengal">West Bengal</option>
							</select>
						</td>
						<td colspan="3"></td>
					</tr>				
					<tr>
						<td>Pin Code<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" maxlength="6" name="permanent_pincode" onkeypress="return isNumber(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<th colspan="3">Correspondence Address Details</th>
						<th colspan="3"><input type="checkbox" name="same_as_above" onChange="copyAddress()"/>same as above
					</tr>
					<tr>
						<td>Address<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="temporary_address"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>City<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="temporary_city" onkeypress="return isParent(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>District<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="temporary_district" onkeypress="return isParent(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>State<span class="mandatory">*</span></td>
						<td colspan="2">
							<select name="temporary_state">
								<option value="Andaman and Nicobar">Andaman and Nicobar</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chandigarh">Chandigarh</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
								<option value="Daman and Diu">Daman and Diu</option>
								<option value="Delhi">Delhi</option>
								<option value="Goa">Goa</option>
								<option value="Gujrat">Gujrat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">Himachal Pradesh</option>
								<option value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerla">Kerla</option>
								<option value="Lakshdweep">Lakshdweep</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharastra">Maharastra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalay">Meghalay</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Odisha">Odisha</option>
								<option value="Puducherry">Puducherry</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Sikkim">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="Uttarakhand">Uttarakhand</option>
								<option value="West Bengal">West Bengal</option>
							</select>
						</td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>Pin Code<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" maxlength="6" name="temporary_pincode" onkeypress="return isNumber(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<th colspan="6">Additional Details</th>
					</tr>
					<tr>
						<td>Do you have Aadhar<span class="mandatory">*</span></td>
						<td colspan="5">
							<input type="radio" name="aadhar" value="yes" checked onchange="aadharCheck()" />Yes&nbsp;
							<input type="radio" name="aadhar" value="no" onchange="aadharCheck()"/>No
						</td>
					</tr>
					<tr>
						<td>Aadhar No.<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" maxlength="12" name="aadhar_no" onkeypress="return isNumber(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td colspan="6">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" align="right">
							<input type="submit" class="btn" name="submit" value="Submit"/>
						</td>
						<td colspan="3" align="left">
							<input type="reset" class="btn" value="Reset"/>
						</td>
				</table>
			</form>
		</div>
		<?php require('footer.php');?>
	</div>
 </body>
</html>