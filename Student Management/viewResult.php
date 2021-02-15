<!DOCTYPE html>
<?php
	if(isset($_POST['sem']))
	{
		require('database.php');
		$serial=$_POST['serial_no'];
		$sem=$_POST['sem'];
		$query1="SELECT first_name,middle_name,last_name,father_name,mother_name,dob,sem,test1,test2 FROM student WHERE serial_no=$serial;";
		$query2="SELECT sub1,sub2,sub3,sub4,sub5 FROM test1 WHERE sem=$sem AND serial_no=$serial;";
		$query3="SELECT sub1,sub2,sub3,sub4,sub5 FROM test2 WHERE sem=$sem AND serial_no=$serial;";
		$query4="SELECT subjects FROM subject WHERE sem=$sem;";
		
		$result1=mysqli_query($conn,$query1);
		$row1=mysqli_fetch_assoc($result1);
		
			$firstname=$row1['first_name'];
			$middlename=$row1['middle_name'];
			$lastname=$row1['last_name'];
			$fathername=$row1['father_name'];
			$mothername=$row1['mother_name'];
			$dateofbirth=date("d-m-Y",strtotime($row1['dob']));
			$sem1=$row1['sem'];
			$test1=$row1['test1'];
			$test2=$row1['test2'];
			
		$result2=mysqli_query($conn,$query2);
		$count=mysqli_num_rows($result2);
		
			if($count)
			{
				$row2=mysqli_fetch_assoc($result2);
				$t1sub1=$row2['sub1'];
				$t1sub2=$row2['sub2'];
				$t1sub3=$row2['sub3'];
				$t1sub4=$row2['sub4'];
				$t1sub5=$row2['sub5'];
			}
			else
			{
				
				$t1sub1="-";
				$t1sub2="-";
				$t1sub3="-";
				$t1sub4="-";
				$t1sub5="-";
			}

		$result3=mysqli_query($conn,$query3);
		$count2=mysqli_num_rows($result3);
		
			if($count2)
			{
				$row3=mysqli_fetch_assoc($result3);
				$t2sub1=$row3['sub1'];
				$t2sub2=$row3['sub2'];
				$t2sub3=$row3['sub3'];
				$t2sub4=$row3['sub4'];
				$t2sub5=$row3['sub5'];
			}
			else
			{
				
				$t2sub1="-";
				$t2sub2="-";
				$t2sub3="-";
				$t2sub4="-";
				$t2sub5="-";
			}
			
			$subject=array();
			$i=1;
			$result4=mysqli_query($conn,$query4);
			while($row4=mysqli_fetch_assoc($result4))
			{
				$subject[$i]=$row4['subjects'];
				$i++;
			}
			mysqli_close($conn);
			if($count > 0 && $count2 > 0)
			{
				$gsub1=$t1sub1+$t2sub1;
				$gsub2=$t1sub2+$t2sub2;
				$gsub3=$t1sub3+$t2sub3;
				$gsub4=$t1sub4+$t2sub4;
				$gsub5=$t1sub5+$t2sub5;
				$gt=$gsub1+$gsub2+$gsub3+$gsub4+$gsub5;
				$per=($gt/1000)*100;
				if($per<34)
					$message="Fail";
				else
					$message="Pass";
			}	
			else if($count > 0 && $count2 <=0)
			{
				$gsub1=$t1sub1;
				$gsub2=$t1sub2;
				$gsub3=$t1sub3;
				$gsub4=$t1sub4;
				$gsub5=$t1sub5;
				$gt="Will Be Shown After Test2";
				$per="";
				$message="";
			}
			else
			{
				$gsub1="-";
				$gsub2="-";
				$gsub3="-";
				$gsub4="-";
				$gsub5="-";
				$gt="Will Be Shown After Test2";
				$per="";
				$message="";
			}
			switch($sem)
			{
				case 1:
				$semresult="1st";
				break;
				case 2:
				$semresult="2nd";
				break;
				case 3:
				$semresult="3rd";
				break;
				case 4:
				$semresult="4th";
				break;
				case 5:
				$semresult="5th";
				break;
				case 6:
				$semresult="6th";
			}
	}
	else
		header('Location: result.php');
?>
<html>
 <head>
  <title>Test</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/marksheet.css"/>
  <link rel="shortcut icon" href="images/12-01-39-813860_user_512x512.png"/>
  <script src="js/resultvalid.js"></script>
 </head>
 <body onload="check1()">
	<div class="main_div">
		<div class="home">
			<h1 align="center"><u>Bachelor Of Computer Application</u></h1><br>
			<div id="marksheet">
				<table id="result">
					<tr>
						<td>BCA</td>
						<td><?php echo $semresult." Semester"; ?></td>
						<td width="50%"></td>
					</tr>
					<tr>
						<td>Serial No : </td>
						<td><?php echo $serial;?></td>
						
					</tr>
					<tr>
						<td>Name Of Student :</td>
						<td><?php echo "$firstname $middlename $lastname";?></td>
					</tr>
					<tr>
						<td>Father's Name :</td>
						<td><?php echo $fathername;?></td>
					</tr>
					<tr>
						<td>Mother's Name :</td>
						<td><?php echo $mothername;?></td>
					</tr>
					<tr>
						<td>Date Of Birth :</td>
						<td><?php echo $dateofbirth;?></td>
					</tr>
				</table>
				<table border="1" id="marks">
					<tr>
						<th>Name of Subject</th>
						<th colspan="2" >First Test</th>
						<th colspan="2" >Second Test</th>
						<th colspan="2" >Total Marks</th>
					</tr>
					<tr>
						<td style="border:none;"></td>
						<td>Maximum Marks</td>
						<td>Marks Obtained</td>
						<td>Maximum Marks</td>
						<td>Mark Obtained</td>
						<td>Maximum Marks</td>
						<td>Mark Obtained</td>
					</tr>
					
					<tr>
						<td><?php echo $subject[1]; ?></td>
						<td>100</td>
						<td class="subject"><?php echo $t1sub1;?></td>
						<td>100</td>
						<td class="subject"><?php echo $t2sub1;?></td>
						<td>200</td>
						<td><?php echo $gsub1; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $subject[2]; ?></td>
						<td>100</td>
						<td class="subject"><?php echo $t1sub2;?></td>
						<td>100</td>
						<td class="subject"><?php echo $t2sub2;?></td>
						<td>200</td>
						<td><?php echo $gsub2; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $subject[3]; ?></td>
						<td>100</td>
						<td class="subject"><?php echo $t1sub3;?></td>
						<td>100</td>
						<td class="subject"><?php echo $t2sub3;?></td>
						<td>200</td>
						<td><?php echo $gsub3; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $subject[4]; ?></td>
						<td>100</td>
						<td class="subject"><?php echo $t1sub4;?></td>
						<td>100</td>
						<td class="subject"><?php echo $t2sub4;?></td>
						<td>200</td>
						<td><?php echo $gsub4; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $subject[5]; ?></td>
						<td>100</td>
						<td class="subject"><?php echo $t1sub5;?></td>
						<td>100</td>
						<td class="subject"><?php echo $t2sub5;?></td>
						<td>200</td>
						<td><?php echo $gsub5; ?></td>
					</tr>
				</table>
				<center>
					<table  style="width:45%;">
						<tr>																			
							<td colspan="7"><br></td>
						</tr>
						
						<tr>
							
							<td><b>Grand Total : </b></td>
							<td><?php if($gt!="Will Be Shown After Test2")echo "$gt/1000";else echo $gt; ?></td>
							<?php if($message!="")echo "<td id='progress'>$message</td>"?>
						</tr>
					</table >
					<table style="width:30%;" >
						<tr align="center">
							<th><button onclick="window.print()" class="btn" style="text-shadow:none;box-shadow:none;color:white;">Print</button></th>
							<th><a href="result.php" ><button class="btn" style="text-shadow:none;box-shadow:none;color:white;">Back</button></a></th>
						</tr>
					</table>
				</center>
			</div>
		</div>
	</div>
 </body>
</html>