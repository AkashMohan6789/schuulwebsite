<!-- 
	/* This Code is For Creating User and its Password */
-->
<?php
	$user="root";
	$pass="";
	$dbhost="localhost:3306";
	$conn=mysqli_connect($dbhost,$user,$pass);
	if(!$conn)
	{	
		die(mysqli_error());
	}
	else
	{
		$query1="CREATE USER 'developer'@'localhost' IDENTIFIED BY 'Varanasi@65';";
		$query2="GRANT ALL PRIVILEGES ON *.* TO 'developer'@'localhost';";
		$result1=mysqli_query($conn,$query1);
		$result2=mysqli_query($conn,$query2);
		mysqli_close($conn);
		header('Location:index.php');
	}
?>
	