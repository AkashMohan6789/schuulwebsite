<?php 
  $user="root";
	$pass="";
	$db="studentmanagement";
	$dbhost = "localhost";
	$conn = mysqli_connect($dbhost,$user,$pass,$db);
	if(!$conn)
	{	
		die(mysqli_error());
	}
?>	