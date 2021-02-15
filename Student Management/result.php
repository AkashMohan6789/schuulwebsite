<!DOCTYPE html>
<html>
 <head>
  <title>Result</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/admission.css"/>
  <link rel="shortcut icon" href="images/12-01-39-813860_user_512x512.png"/>
  <script src="js/valid.js"></script>
  <script src="js/allvalid.js"></script>
 </head>
 <body onload="">
	<div class="main_div">
		<?php
			require('header.php');
			require('menu.php');
		?>
		<div class="home">
			<h1 class="heading">Result</h1>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="result" onsubmit="return test3()">
			<center>
				<table style="width:50%;">
					<tr>
						<td>Serial No :</td>
						<td><input type="text" name="serial_no" class="text" onkeypress="return isNumber(event)" value="<?php if(isset($_POST['serial_no']))echo $_POST['serial_no']; ?>" onblur="getSefm()"/></td>
						<?php
							if(isset($_POST['submit1']))
							{	
								require('database.php');
								$serial=$_POST['serial_no'];
								$query1="SELECT sem,test1,test2 FROM student WHERE serial_no=$serial;";
								$result=mysqli_query($conn,$query1);
								if(mysqli_num_rows($result))
								{
									$row=mysqli_fetch_assoc($result);
									$sem=$row['sem'];
									echo "<td>Semester : </td>";
									echo "<td><select name='sem'>";
									for($i=1;$i<=$sem;$i++)
									{
										echo "<option value=$i>$i</option>";
									}
									echo "</select></td>";
									unset($_POST['submit1']);
								}
								else
								{
									$message="No Record Found.";
								}
								mysqli_close($conn);
							}
						?>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr align="center">
						<?php 
							if(!isset($sem))
								echo "<td colspan='4'><input type='submit' value='Semester' name='submit1' class='btn'/></td>";
							if(isset($sem))
								echo "<td colspan='4'><input type='submit' value='Submit' name='submit2' class='btn' onclick='result.action=\"viewResult.php\"' onmouseover='document.result.serial_no.disabled=false;' onmouseout='document.result.serial_no.disabled=true;'/></td>";
						?>
					</tr>
				</table>
				</center>
				<?php if(isset($message)) echo "<center><p class='err'>$message</p></center>";?>
			</form>
		</div>
		<?php require('footer.php');?>
	</div>
	<script>
		var x=document.result.serial_no;
		var y=document.result.submit2;
		<?php 
			if(isset($sem))
				echo "x.disabled='true'";
		?>
	</script>
 </body>
</html>