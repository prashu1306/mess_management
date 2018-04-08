<?php
	$username=$_POST['uname'];
	$password=$_POST['psw'];
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
$result=mysqli_query($con,"select * from login where username ='$username' and password='$password'");
	$row=mysqli_fetch_array($result);
if($row['username']==$username && $row['password']==$password)
	{
		header("Location:mess_management2.php");
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('Login failed! Please enter correct username and password.')</script>";
	}

mysqli_close($con);
?>