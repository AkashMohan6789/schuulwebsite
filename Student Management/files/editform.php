			<br>
			<br>
			<form action="update.php" method="post" name="record" onsubmit="return test()">
				<table cellspacing="0">
					<tr>
						<th colspan="6">Personal Details</th>
					</tr>
					<tr>
						<td>Course<span class="mandatory">*</span></td>
						<td><select name="course">
								<option <?php if(isset($course) && $course=='BCA')echo "selected" ?> value="BCA">BCA</option>
							</select>
						<td colspan="4"></td>
					</tr>
					<tr>
						<td>First Name<span class="mandatory">*</span></td>
						<td><input type="text" class="text" name="first_name" value="<?php echo isset($firstname)?"$firstname":'';?>"/></td>
						<td>Middle_Name</td>
						<td><input type="text" class="text" name="middle_name" value="<?php echo isset($middlename)?"$middlename":'';?>"/></td>
						<td>Last_Name<span class="mandatory">*</span></td>
						<td><input type="text" class="text" name="last_name" value="<?php echo isset($lastname)?"$lastname":'';?>"/></td>
					</tr>
					<tr>
						<td>Father's Name<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="father_name" value="<?php echo isset($fathername)?"$fathername":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>Mother's Name<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="mother_name" value="<?php echo isset($mothername)?"$mothername":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>Gender<span class="mandatory">*</span></td>
						<td>
							<input <?php if(isset($gender) && $gender=="Male")echo "checked";?> type="radio" name="gender" value="Male"/>Male&nbsp;
							<input <?php if(isset($gender) && $gender=="Female")echo "checked";?> type="radio" name="gender" value="Female"/>Female&nbsp;
							<input <?php if(isset($gender) && $gender=="Other")echo "checked";?> type="radio" name="gender" value="Other"/>Other
						</td>
						<td></td>
						<td>Date of Birth<span class="mandatory">*</span></td>
						<td colspan="2"><input type="date" class="text" name="date_of_birth" value="<?php echo isset($dateofbirth)?"$dateofbirth":'';?>"/></td>
					</tr>
					<tr>
						<td>Category<span class="mandatory">*</span></td>
						<td colspan="5">
							<select name="category">
								<option <?php if(isset($category) && $category=="General") echo "selected";?> value="General">General</option>
								<option <?php if(isset($category) && $category=="Scheduled Caste")echo "selected";?> value="Scheduled Caste">Scheduled Caste</option>
								<option <?php if(isset($category) && $category=="Scheduled Tribe")echo "selected";?> value="Scheduled Tribe">Scheduled Tribe</option>
								<option <?php if(isset($category) && $category=="Other Backward Class")echo "selected";?> value="Other Backward Class">Other Backward Class(OBC)</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Religion<span class="mandatory">*</span></td>
						<td colspan="5">
							<select name="religion" >
								<option <?php if(isset($religion) && $religion=="Hinduism") echo "selected";?> value="Hinduism">Hinduism</option>
								<option <?php if(isset($religion) && $religion=="Christianity") echo "selected";?> value="Christianity">Christianity</option>
								<option <?php if(isset($religion) && $religion=="Islam") echo "selected";?> value="Islam">Islam</option>
								<option <?php if(isset($religion) && $religion=="Sikhism") echo "selected";?> value="Sikhism">Sikhism</option>
								<option <?php if(isset($religion) && $religion=="Buddhism") echo "selected";?> value="Buddhism">Buddhism</option>
								<option <?php if(isset($religion) && $religion=="Jainism") echo "selected";?> value="Jainism">Jainism</option>
								<option <?php if(isset($religion) && $religion=="Other") echo "selected";?> value="Other">Other</option>
							</select>
						</td>
					</tr>
					<tr>
						<th colspan="6">Contact Details</th>
					</tr>
					<tr>
						<td>Personal Contact<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" maxlength="10" name="personal_contact" value="<?php echo isset($personalcontact)?"$personalcontact":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>Parent's Contact<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" maxlength="10" name="parent_contact" value="<?php echo isset($parentcontact)?"$parentcontact":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>E-mail<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="email" value="<?php echo isset($email)?"$email":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<th colspan="6">Permanent Address Details</th>
					</tr>
					<tr>
						<td>Address<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="permanent_address" value="<?php echo isset($permanentaddress)?"$permanentaddress":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>City<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="permanent_city" value="<?php echo isset($permanentcity)?"$permanentcity":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>District<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="permanent_district" value="<?php echo isset($permanentdistrict)?"$permanentdistrict":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>State<span class="mandatory">*</span></td>
						<td colspan="2">
							<select name="state" >
								<option <?php if(isset($state) && $state=="Andaman and Nicobar") echo "selected";?> value="Andaman and Nicobar">Andaman and Nicobar</option>
								<option <?php if(isset($state) && $state=="Andhra Pradesh") echo "selected";?> value="Andhra Pradesh">Andhra Pradesh</option>
								<option <?php if(isset($state) && $state=="Andhra Pradesh") echo "selected";?> value="Arunachal Pradesh">Andhra Pradesh</option>
								<option <?php if(isset($state) && $state=="Assam") echo "selected";?> value="Assam">Assam</option>
								<option <?php if(isset($state) && $state=="Bihar") echo "selected";?> value="Bihar">Bihar</option>
								<option <?php if(isset($state) && $state=="Chandigarh") echo "selected";?> value="Chandigarh">Chandigarh</option>
								<option <?php if(isset($state) && $state=="Chhattisgarh") echo "selected";?> value="Chhattisgarh">Chhattisgarh</option>
								<option <?php if(isset($state) && $state=="Dadra and Nagar Haveli") echo "selected";?> value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
								<option <?php if(isset($state) && $state=="Daman and Diu") echo "selected";?> value="Daman and Diu">Daman and Diu</option>
								<option <?php if(isset($state) && $state=="Delhi") echo "selected";?> value="Delhi">Delhi</option>
								<option <?php if(isset($state) && $state=="Goa") echo "selected";?> value="Goa">Goa</option>
								<option <?php if(isset($state) && $state=="Gujrat") echo "selected";?> value="Gujrat">Gujrat</option>
								<option <?php if(isset($state) && $state=="Haryana") echo "selected";?> value="Haryana">Haryana</option>
								<option <?php if(isset($state) && $state=="Himachal Pradesh") echo "selected";?> value="Himachal Pradesh">Himachal Pradesh</option>
								<option <?php if(isset($state) && $state=="Jammu and Kashmir") echo "selected";?> value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option <?php if(isset($state) && $state=="Jharkhand") echo "selected";?> value="Jharkhand">Jharkhand</option>
								<option <?php if(isset($state) && $state=="Karnataka") echo "selected";?> value="Karnataka">Karnataka</option>
								<option <?php if(isset($state) && $state=="Kerla") echo "selected";?> value="Kerla">Kerla</option>
								<option <?php if(isset($state) && $state=="Lakshdweep") echo "selected";?> value="Lakshdweep">Lakshdweep</option>
								<option <?php if(isset($state) && $state=="Madhya Pradesh") echo "selected";?> value="Madhya Pradesh">Madhya Pradesh</option>
								<option <?php if(isset($state) && $state=="Maharastra") echo "selected";?> value="Maharastra">Maharastra</option>
								<option <?php if(isset($state) && $state=="Manipur") echo "selected";?> value="Manipur">Manipur</option>
								<option <?php if(isset($state) && $state=="Meghalay") echo "selected";?> value="Meghalay">Meghalay</option>
								<option <?php if(isset($state) && $state=="Mizoram") echo "selected";?> value="Mizoram">Mizoram</option>
								<option <?php if(isset($state) && $state=="Nagaland") echo "selected";?> value="Nagaland">Nagaland</option>
								<option <?php if(isset($state) && $state=="Odisha") echo "selected";?> value="Odisha">Odisha</option>
								<option <?php if(isset($state) && $state=="Pondicherry") echo "selected";?> value="Pondiucherry">Pondicherry</option>
								<option <?php if(isset($state) && $state=="Punjab") echo "selected";?> value="Punjab">Punjab</option>
								<option <?php if(isset($state) && $state=="Rajasthan") echo "selected";?> value="Rajasthan">Rajasthan</option>
								<option <?php if(isset($state) && $state=="Sikkim") echo "selected";?> value="Sikkim">Sikkim</option>
								<option <?php if(isset($state) && $state=="Tamil Nadu") echo "selected";?> value="Tamil Nadu">Tamil Nadu</option>
								<option <?php if(isset($state) && $state=="Telangana") echo "selected";?> value="Telangana">Telangana</option>
								<option <?php if(isset($state) && $state=="Tripura") echo "selected";?> value="Tripura">Tripura</option>
								<option <?php if(isset($state) && $state=="Uttar Pradesh") echo "selected";?> value="Uttar Pradesh">Uttar Pradesh</option>
								<option <?php if(isset($state) && $state=="Uttarakhand") echo "selected";?> value="Uttarakhand">Uttarakhand</option>
								<option <?php if(isset($state) && $state=="West Bengal") echo "selected";?> value="West Bengal">West Bengal</option>
							</select>
						</td>
						<td colspan="3"></td>
					</tr>				
					<tr>
						<td>Pin Code<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" maxlength="6" name="permanent_pincode" value="<?php echo isset($permanentpincode)?"$permanentpincode":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<th colspan="3">Correspondence Address Details</th>
						<th colspan="3"><input type="checkbox" name="same_as_above" onChange="copyAddress()"/>same as above
					</tr>
					<tr>
						<td>Address<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="temporary_address" value="<?php echo isset($temporaryaddress)?"$temporaryaddress":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>City<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="temporary_city" value="<?php echo isset($temporarycity)?"$temporarycity":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>District<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" name="temporary_district" value="<?php echo isset($temporarydistrict)?"$temporarydistrict":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>State<span class="mandatory">*</span></td>
						<td colspan="2">
							<select name="temporary_state" >
								<option <?php if(isset($temporarystate) && $temporarystate=="Andaman and Nicobar") echo "selected";?> value="Andaman and Nicobar">Andaman and Nicobar</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Andhra Pradesh") echo "selected";?> value="Andhra Pradesh">Andhra Pradesh</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Andhra Pradesh") echo "selected";?> value="Arunachal Pradesh">Andhra Pradesh</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Assam") echo "selected";?> value="Assam">Assam</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Bihar") echo "selected";?> value="Bihar">Bihar</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Chandigarh") echo "selected";?> value="Chandigarh">Chandigarh</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Chhattisgarh") echo "selected";?> value="Chhattisgarh">Chhattisgarh</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Dadra and Nagar Haveli") echo "selected";?> value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Daman and Diu") echo "selected";?> value="Daman and Diu">Daman and Diu</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Delhi") echo "selected";?> value="Delhi">Delhi</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Goa") echo "selected";?> value="Goa">Goa</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Gujrat") echo "selected";?> value="Gujrat">Gujrat</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Haryana") echo "selected";?> value="Haryana">Haryana</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Himachal Pradesh") echo "selected";?> value="Himachal Pradesh">Himachal Pradesh</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Jammu and Kashmir") echo "selected";?> value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Jharkhand") echo "selected";?> value="Jharkhand">Jharkhand</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Karnataka") echo "selected";?> value="Karnataka">Karnataka</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Kerla") echo "selected";?> value="Kerla">Kerla</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Lakshdweep") echo "selected";?> value="Lakshdweep">Lakshdweep</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Madhya Pradesh") echo "selected";?> value="Madhya Pradesh">Madhya Pradesh</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Maharastra") echo "selected";?> value="Maharastra">Maharastra</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Manipur") echo "selected";?> value="Manipur">Manipur</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Meghalay") echo "selected";?> value="Meghalay">Meghalay</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Mizoram") echo "selected";?> value="Mizoram">Mizoram</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Nagaland") echo "selected";?> value="Nagaland">Nagaland</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Odisha") echo "selected";?> value="Odisha">Odisha</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Puducherry") echo "selected";?> value="Puducherry">Puducherry</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Punjab") echo "selected";?> value="Punjab">Punjab</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Rajasthan") echo "selected";?> value="Rajasthan">Rajasthan</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Sikkim") echo "selected";?> value="Sikkim">Sikkim</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Tamil Nadu") echo "selected";?> value="Tamil Nadu">Tamil Nadu</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Telangana") echo "selected";?> value="Telangana">Telangana</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Tripura") echo "selected";?> value="Tripura">Tripura</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Uttar Pradesh") echo "selected";?> value="Uttar Pradesh">Uttar Pradesh</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="Uttarakhand") echo "selected";?> value="Uttarakhand">Uttarakhand</option>
								<option <?php if(isset($temporarystate) && $temporarystate=="West Bengal") echo "selected";?> value="West Bengal">West Bengal</option>
							</select>
						</td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td>Pin Code<span class="mandatory">*</span></td>
						<td colspan="2"><input type="text" class="text" maxlength="6" name="temporary_pincode" value="<?php echo isset($temporarypincode)?"$temporarypincode":'';?>"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<th colspan="6">Additional Details</th>
					</tr>
					<tr>
						<td>Do you have Aadhar<span class="mandatory">*</span></td>
						<td colspan="5">
							<input <?php if(isset($aadharno) && $aadharno!=null)echo "checked";?> type="radio" name="aadhar" value="yes" onchange="aadharCheck()"/>Yes&nbsp;
							<input <?php if(isset($aadharno) && $aadharno==null)echo "checked";?> type="radio" name="aadhar" value="no" onchange="aadharCheck()"/>No
						</td>
					</tr>
					<tr>
						<td>Aadhar No.<?php if(isset($aadharno) && $aadharno!=null) echo "<span class='mandatory'>*</span>";?></td>
						<td colspan="2"><input type="text" class="text" maxlength="12" name="aadhar_no" value="<?php echo isset($aadharno)?"$aadharno":'';?>" onkeypress="return isNumber(event);"/></td>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td colspan="6">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" align="right">
							<input type="submit" class="btn" value="Update"/>
						</td>
						<td colspan="3" align="left">
							<input type="reset" class="btn" value="Reset"/>
						</td>
				</table>
			</form>