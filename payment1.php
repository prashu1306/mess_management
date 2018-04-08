<?php
	$rollnumber=$_POST['roll'];
	$fees=$_POST['fees'];
$con = mysqli_connect("localhost:3306","root","");
if(!$con)
{
	die("Not Connected!!Try Again!!");
}
$dbstatus=mysqli_select_db($con,"messs3");
if(!$dbstatus)
{
	die("Database not found");
}
$result=mysqli_query($con,"insert into payment values ('$rollnumber','$fees')");
	
if($result)
	{
		header("Location:mess_management2.php");
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('Login failed! Please enter correct username and password.')</script>";
	}

mysqli_close($con);
?>