<?php
	$name=$_POST['name'];
	$roll_number=$_POST['roll_number'];
	$email=$_POST['email'];
	$password=$_POST['psw'];
	$hall=$_POST['hall'];
	
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
$result=mysqli_query($con,"insert into registration values ('$name','$roll_number','$email','$psw','$hall')");
	
if($result)
	{
		header("Location:signlogin.php");
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('Login failed! Please enter correct username and password.')</script>";
	}

mysqli_close($con);
?>