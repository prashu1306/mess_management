<!DOCTYPE html>
<html>
<head>
	<title>FEE PAYMENT</title>
<style>
body{
text-align:center;
background-image:url("payment.jpg");
}
h1{
font-style:40px;
font-weight:bold;
color:red;
background-color:white;
}
input[type=text]{
border:2px solid red;
width=100%;
}
fieldset{
	background-color:white;
	text-align:center;
	margin-left: 300px;
    margin-right: 300px;
}
</style>
</head>
<body>
<h1 >ONLINE FEE PAYMENT</h1></br></br></br></br>
<fieldset></br></br></br></br>
<form action="payment1.php" method="post">
<label><b>ROLL NUMBER:</b></label>
    <input type="text"  name="roll" required></br></br></br></br>
	<label><b>FEES:</b></label>
    <input type="text"  name="fees" required></br></br></br></br>
	
	<button type="submit" >SUBMIT</button></br></br></br></br>
</form>
</fieldset>
</body>
</html>