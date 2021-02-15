<?php
	session_start();
	require('database.php');
	require('files/variable.php');
	$serial=$_SESSION['id'];
	$query="UPDATE student SET course='$course',first_name='$firstname',middle_name='$middlename',last_name='$lastname',father_name='$fathername',mother_name='$mothername',gender='$gender',dob='$dateofbirth',category='$category',religion='$religion',personal_contact='$personalcontact',parent_contact='$parentcontact',email='$email',permanent_address='$permanentaddress',permanent_city='$permanentcity',permanent_district='$permanentdistrict',permanent_state='$state',permanent_pincode='$permanentpincode',temporary_address='$temporaryaddress',temporary_city='$temporarycity',temporary_district='$temporarydistrict',temporary_state='$temporarystate',temporary_pincode='$temporarypincode',aadhar='$aadharno' WHERE serial_no=$serial;";
	if(!mysqli_query($conn,$query))
		die("Error:".mysqli_error($conn));
	else{
		unset($_SESSION['id']);
		session_destroy();
		$message="Record Updated";
		header('Location: edit.php?Message='.$message);
	}
	mysqli_close($conn);
?>