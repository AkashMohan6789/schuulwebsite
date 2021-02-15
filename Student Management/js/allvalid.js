function isSemester(e)
{
	var ikeyCode=(e.which) ? e.which : e.keyCode;
	if(ikeyCode<49||ikeyCode>54)
		return false;
	return true;
}

function semTest()
{
	var serial=document.test.serial_no;
	if(serial.value==""){
		alert("Please Enter Serial Number");
		serial.focus();
		return false;
	}
	return true;
}

function examResult(){
	var sub1=document.exam.sub1;
	var sub2=document.exam.sub2;
	var sub3=document.exam.sub3;
	var sub4=document.exam.sub4;
	var sub5=document.exam.sub5;
	if(sub1.value=="" || check(sub1))
	{
		alert("Please Enter Marks");
		sub1.focus();
		return false;
	}
	if(sub2.value=="" || check(sub2))
	{
		alert("Please Enter Marks");
		sub2.focus();
		return false;
	}
	if(sub3.value=="" || check(sub3))
	{
		alert("Please Enter Marks");
		sub3.focus();
		return false;
	}
	if(sub4.value=="" || check(sub4))
	{
		alert("Please Enter Marks");
		sub4.focus();
		return false;
	}
	if(sub5.value=="" || check(sub5))
	{
		alert("Please Enter Marks");
		sub5.focus();
		return false;
	}
	return true;
}

function check(subject){

	if(subject.value > 100){
		alert("Maximum Marks : 100");
		return true;
	}
	return false;
}

function getSem()
{
	alert("focus out");
	document.submit();
}

function test3()
{
	var no=document.result.serial_no;
	if(no.value=="")
	{
		alert("Please Enter Serial no.");
		no.focus();
		return false;
	}
	return true;
}