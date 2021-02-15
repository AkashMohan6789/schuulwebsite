<?php
	session_start();
	$serial=$_SESSION['serial'];
	require('database.php');
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	$query1="SELECT sem,test1,test2 FROM student WHERE serial_no=$serial";
					
	$result1=mysqli_query($conn,$query1);
	if(mysqli_num_rows($result1))
	{
		$row=mysqli_fetch_assoc($result1);
		$sem=$row['sem'];
		$test1=$row['test1'];
		$test2=$row['test2'];
	}
	echo $test1;
	if($test2=="")
	{
		if($test1=="")
		{
			$query2="INSERT INTO test1(serial_no,sem,sub1,sub2,sub3,sub4,sub5) values($serial,$sem,$sub1,$sub2,$sub3,$sub4,$sub5);";
			$query3="UPDATE student SET test1=1 WHERE serial_no=$serial";
		}
		else
		{
			$query2="INSERT INTO test2(serial_no,sem,sub1,sub2,sub3,sub4,sub5) values($serial,$sem,$sub1,$sub2,$sub3,$sub4,$sub5);";
			if($sem==6)
			{
				$query3="UPDATE student SET test2=1 WHERE serial_no=$serial";
			}
			else
			{
				$i=$sem+1;
				$query3="UPDATE student SET sem=$i,test1=null WHERE serial_no=$serial";
			}
		}
		$result2=mysqli_query($conn,$query2);
		$result3=mysqli_query($conn,$query3);
		$message="Record Inserted";
	}
	else
	{
		$message="Already Inserted.";
	}
	mysqli_close($conn);
	session_destroy();
	header('Location: test.php?Message='.$message);
?>