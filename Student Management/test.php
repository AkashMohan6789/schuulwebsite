<!DOCTYPE html>
<html>
 <head>
  <title>Test</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/admission.css"/>
  <link rel="shortcut icon" href="images/12-01-39-813860_user_512x512.png"/>
  <script src="js/valid.js"></script>
  <script src="js/allvalid.js"></script>
 </head>
 <body>
	<div class="main_div">
		<?php
			require('header.php');
			require('menu.php');
		?>
		<div class="home">
			<h1 class="heading">Test</h1>
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" name="test" onsubmit="return semTest()" >
				<center>
					<table style="width:50%;"> 
						<tr>
							<td width="10%">Serial number:</td>
							<td width="10%"><input type="text" class="text" name="serial_no" value="<?php if(isset($_POST['serial_no']))echo $_POST['serial_no'];?>" onkeypress="return isNumber(event)" onpaste="notPaste()"/></td>
						</tr>
						<tr>
							<td><br></td>
						</tr>
						</br>
						</br>
						</br>
						<tr>
							<td colspan="4" align="center"><input type="submit" value="submit" name="submit" class="btn"></td>
						</tr>
					</table>
				</center>
			</form>
			<?php 
				session_start();
				
				if(isset($_POST['submit']))
				{
					$_SESSION['serial']=$_POST['serial_no'];
					require('database.php');	
					$serial=$_POST['serial_no'];
					$query1="SELECT first_name,middle_name,last_name,sem,test1,test2 FROM student WHERE serial_no=$serial";
					
					$result1=mysqli_query($conn,$query1);
					if(mysqli_num_rows($result1))
					{
						$row=mysqli_fetch_assoc($result1);
						$sem=$row['sem'];
						$test1=$row['test1'];
						$test2=$row['test2'];
						$firstname=$row['first_name'];
						$middlename=$row['middle_name'];
						$lastname=$row['last_name'];
						
						echo "<center><p class='student'><span>Name : </span>$firstname $middlename $lastname	<span>Semester : </span>$sem</p></center>";
						
						$query2="SELECT * FROM subject WHERE sem=$sem;";
						
						echo "<br><br><br><form action='marks1.php' method='post' name='exam' onsubmit='return examResult()'>";
						echo "<center>";
						echo "<table style='width:70%' cellspacing='0'>";
						
						$result2=mysqli_query($conn,$query2);
						if(mysqli_num_rows($result2))
						{	
							$i=1;
							echo "<tr>";
							echo "<th>Subject</th>";
							echo "<th>Test Mark</th>";
							echo "</tr>";
							
							while($row=mysqli_fetch_assoc($result2))
							{
								
								echo "<tr>";
								echo "<td>".$row['subjects']."</td>";
								echo "<td width='25%' align='center'><input type='text' maxlength='3' class='text' name='sub$i' onkeypress='return isNumber(event)'/></td>";
								echo "</tr>";
								$i++;
							}
							
							echo "<tr><td><br></td></tr>";
							echo "<tr>";
							echo "<td align='right'><input type='submit' value='submit' class='btn' name='submit1'></td>";
							echo "<td align='left'><input type='reset' value='reset' class='btn'></td>";
							echo "</tr>";
						}
						echo "</table>";
						echo "</center>";
						echo "</form>";
					}
					else
						$error="No Record Found";
					
					
					if(isset($error))
						echo "<p align='center' class='err'>$error</p><br>";

					mysqli_close($conn);
				}
				else{
					if(isset($_GET['Message']))
					{
						echo "<center><p class='err'>".$_GET['Message']."</p><br></center> ";
						unset($_GET['Message']);
					}
				}
			?>
		</div>
		<?php require('footer.php');?>
	</div>
 </body>
</html>