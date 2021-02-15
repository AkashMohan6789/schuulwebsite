function test()
{
	var firstname=document.record.first_name;
	var lastname=document.record.last_name;
	var fathername=document.record.father_name;
	var mothername=document.record.mother_name;
	var dateofbirth=document.record.date_of_birth;
	var personalcontact=document.record.personal_contact;
	var parentcontact=document.record.parent_contact;
	var email=document.record.email;
	var p_address=document.record.permanent_address;
	var p_city=document.record.permanent_city;
	var p_district=document.record.permanent_district;
	var p_pincode=document.record.permanent_pincode;
	var t_address=document.record.temporary_address;
	var t_city=document.record.temporary_city;
	var t_district=document.record.temporary_district;
	var t_pincode=document.record.temporary_pincode;
	var have_aadhar=document.record.aadhar;
	var aadhar=document.record.aadhar_no;
	
	if(firstname.value==""){
		alert("Please Enter First Name");
		firstname.focus();
		
		return false;
	}
	
	if(lastname.value==""){
		alert("Please Enter Last Name");
		lastname.focus();
		return false;
	}
	if(fathername.value==""){
		alert("Please Enter Father's Name");
		fathername.focus();
		return false;
	}
	if(mothername.value==""){
		alert("Please Enter Mother's Name");
		mothername.focus();
		return false;
	}
	if(dateofbirth.value==""){
		alert("Please Enter Date Of Birth");
		dateofbirth.focus();
		return false;
	}
	if(personalcontact.value==""){
		alert("Please Enter Personal Contact");
		personalcontact.focus();
		return false;
	}
	if(parentcontact.value==""){
		alert("Please Enter Parent Contact");
		parentcontact.focus();
		return false;
	}
	if(validEmail(email.value)){
		email.focus();
		return false;
	}
	
	if(p_address.value==""){
		alert("Please Enter Permanent Address");
		p_address.focus();
		return false;
	}
	
	if(p_city.value==""){
		alert("Please Enter Permanent Address City");
		p_city.focus();
		return false;
	}
	if(p_district.value==""){
		alert("Please Enter Permanent Address District");
		p_district.focus();
		return false;
	}
	if(p_pincode.value==""){
		alert("Please Enter Pincode");
		p_pincode.focus();
		return false;
	}
	if(t_address.value==""){
		alert("Please Enter Corresponding Address");
		t_address.focus();
		return false;
	}
	if(t_city.value==""){
		alert("Please Enter Corresponding Address City");
		t_city.focus();
		return false;
	}
	if(t_district.value==""){
		alert("Please Enter Corresponding Address District");
		t_district.focus();
		return false;
	}
	if(t_pincode.value==""){
		alert("Please Enter Corresponding Address Pincode");
		t_pincode.focus();
		return false;
	}
	if(have_aadhar.value=="yes")
	{
		if(aadhar.value==""){
			alert("Please Enter Aadhar Number");
			aadhar.focus();
			return false;
		}
	}
	else{
		aadhar.value=null;
	}
	
	return true;
}

function isParent(e)
{
	var iKeyCode=(e.which)?e.which:e.keyCode;
	if((iKeyCode<65||iKeyCode>90) && (iKeyCode<97||iKeyCode>122) && iKeyCode!=32)
		return false;
	return true;
}

function isNumber(e)
{
	var ikeyCode=(e.which) ? e.which : e.keyCode;
	if(ikeyCode<48||ikeyCode>57)
		return false;
	return true;
}

function isName(e)
{
	var iKeyCode=(e.which)?e.which:e.keyCode;
	if((iKeyCode<65||iKeyCode>90) && (iKeyCode<97||iKeyCode>122) || iKeyCode==32)
		return false;
	return true;
}

function validEmail(usr)
{
	if(usr=="")
	{
		alert("Please Insert Email ID");
		return true;
	}
	else
	{
		var ampindex=usr.indexOf('@');
		var dotindex=usr.lastIndexOf('.');
		if(ampindex==-1||dotindex==-1||ampindex+5 >= dotindex )
		{
			alert("Invalid Email ID");
			return true;
		}
	}
	return false;
}

function copyAddress()
{
	var p_address=document.record.permanent_address;
	var p_city=document.record.permanent_city;
	var p_district=document.record.permanent_district;
	var p_state=document.record.state;
	var p_pincode=document.record.permanent_pincode;
	
	var t_address=document.record.temporary_address;
	var t_city=document.record.temporary_city;
	var t_district=document.record.temporary_district;
	var t_state=document.record.temporary_state;
	var t_pincode=document.record.temporary_pincode;
	
	t_address.value = p_address.value;
	t_city.value = p_city.value;
	t_district.value = p_district.value;
	t_state.value = p_state.value;
	t_pincode.value = p_pincode.value;
}

function aadharCheck()
{
	var aadhar=document.record.aadhar;
	var aadharNo=document.record.aadhar_no;
	var mark=document.getElementsByClassName('mandatory')[23];
	if(aadhar.value=="no"){
		aadharNo.disabled=true;
		aadharNo.value="";
		mark.style.visibility = "hidden";
		
		//mark[0].style.display="none";	/* This statement also hide the content */
	}
	else{
		aadharNo.disabled=false;
		mark.style.visibility = "visible";
		
		//mark[0].style.display="inline";	/* This statement also show the content */
	}
}

function edit()
{
	var serial=document.serial.serial_no;
	if(serial.value=='')
	{
		alert("Please Enter Serial No");
		serial.focus();
		return false;
	}
	return true;
}

function developer()
{
	alert("Ishan Sachin Faisal Shivanshu");
}