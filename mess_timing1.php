<!DOCTYPE html>
<html>
<head>
<style>
h1{
color:red;
font-weight:bold;
background-color:white;
}
body{
	text-align:center;
	background-image:url("Healthy-Picnic-Vegetable-Basket.jpg");
}
table,td{
	border:1px solid black;
}
td{
	height:70px;
	background-color:white;
}
</style>
</head>
<body>
<h1>MESS TIMING</h1></br></br></br></br>
	<table style="width:100%">
	<tr>
	<th>MEAL</th>
	<th>TIMING</th>
	</tr>
	
<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
	die("Not Connected....");
	}
	$db=mysqli_select_db($con,"messs3");
	if(!$db)
	{
		die("database not found!");
	}
	$sql="select * from timing";
	$result=mysqli_query($con,$sql);
	$rowcount=mysqli_num_rows($result);
	if($rowcount>0)
	{
		$row=mysqli_fetch_array($result);
		while($row)
		{
			?>
			<tr>
				<td><?php echo $row['meal']?></td>
				<td><?php echo $row['timing']?></td>
			</tr>
			<?php
			$row=mysqli_fetch_array($result);
			}
			}
			else
			{
			?>
			<tr>
			<td colspan="2">NO RECORD FOUND</td>
			</tr>
			<?php
			}
			mysqli_close($con);
			?>
			</table>
			</body>
			</html>