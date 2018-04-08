<html>
<head>
<style>
body{
	background-image:url("item1.jpg");

}
h1{
	background-color:white;
	color:red;
	font-weight:bold;
	text-align:center;
	font-weight:200%;
}
fieldset{
	color:red;
}
table,th,td{
	border:1px solid black;
	background-color:white;
	text-align:center;
}
th{
	color:black;
	
}
th,td{
	height:60px;
}
</style>
</head>
<body>
<h1>SNACKS</h1>
	<table style="width:100%">
	<tr>
	<th>DAYS</th>
	<th>ITEMS</th>

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
	$sql="select * from snacks";
	$result=mysqli_query($con,$sql);
	$rowcount=mysqli_num_rows($result);
	if($rowcount>0)
	{
		$row=mysqli_fetch_array($result);
		while($row)
		{
			?>
			<tr>
				<td><?php echo $row['days']?></td>
				<td><?php echo $row['items']?></td>
				
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