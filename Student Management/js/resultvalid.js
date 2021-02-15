function check1()
{
	var t1=document.getElementsByClassName('subject');
	var t2=document.getElementById('progress');
	
	for(var i=0;i<10;i++)
	{
		if(t1[i].innerText!="-")
		{
			failOrPass(t1[i]);
		}
	}
	
	if(t2.innerText=="Pass")
	{
		t2.style.background="green";
	}
	else if(t2.innerText=="Fail")
	{
		t2.style.background="red";
	}
	else
	{
		t2.visibility="hidden";
	}
}

function failOrPass(marks)
{
	if(marks.innerText<34)
	{
		marks.style.color="red";
		marks.style.fontWeight="bold";
		marks.style.textDecoration="underline";
	}
}