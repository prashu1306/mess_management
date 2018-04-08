<!DOCTYPE html>
<html>
<head>
<style>
h1{
	color:red;
	font-weight:200%;
	background-color:white;
	text-align:center;
}
fieldset{
	display: block;
    margin-left: 300px;
    margin-right: 300px;
	background-color:white;
}
body{
	background-color:#3399FF;
}
</style>
</head>
<body>
<h1>STUDENT DETAILS</h1></br></br></br>
<fieldset>
	<table>
	
	<?php
	$rollnumber=$_POST['rolll'];
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
$sql="select * from student_details where roll_number='$rollnumber'";
	$result=mysqli_query($con,$sql);
	$rowcount=mysqli_num_rows($result);
	if($rowcount>0)
	{
		$row=mysqli_fetch_array($result);
		while($row)
		{
			?>
			<tr>
				<td>ROLL NUMBER:</td>
				<td><?php echo $row['roll_number']?></td>
			</tr></br></br></br>
			<tr>
				<td>NAME:</td> 
				<td><?php echo $row['name']?></td>
			</tr>
			<tr>
				<td>PROGRAMME:</td>
				<td><?php echo $row['programme']?></td>
			</tr>
			<tr>
				<td>BRANCH:</td>
				<td><?php echo $row['branch']?></td>
			</tr>
			<tr>
				<td>HALL:</td>
				<td><?php echo $row['hall']?></td>
			</tr>
			<tr>
				<td>CATEGORY:</td>
				<td><?php echo $row['category']?></td>
			</tr>
			<?php
			$row=mysqli_fetch_array($result);
			}
			}
			else
			{
			?>
			<tr>
			<td colspan="6">NO RECORD FOUND</td>
			</tr>
			<?php
			}
			mysqli_close($con);
			?>
			
			</table>
			</br></br></br>
			</fieldset>
			</body>
			</html>