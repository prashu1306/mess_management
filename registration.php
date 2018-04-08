<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<style>
body{	
background-color:#00bfff;
}
form {
    border: 3px solid #f1f1f1;
}
h1{
	font-weight:bold;
	color:red;
	text-align:center;
	background-color:white;
}
h2{
text-align:center;
color:red;
background-color:white;
}
input[type=text] {
	
	width:600%;
    padding: 12px 20px;
    margin: 8px 0;
     display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
a{
	float:right;
}
input[type=password] {
	
	width:600%;
    padding: 12px 20px;
    margin: 8px 0;
     display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
button:hover {
    opacity: 0.8;
}
.container {
    padding: 16px;
input{
	width:100%;
}
</style>
</head>
<body>
<a href="signlogin.php">LOG OUT</a></br></br>
<h1>MESS MANAGEMENT SYSTEM</h1>
<h2>REGISTRATION FORM</h2>
<form action="registration1.php" method="post">
<div class="container">
<table>
<tr>
<td>NAME:</td>
<td><input type="text" name="name" ></td>
</tr>
<tr>
<td>ROLL NUMBER::</td>
<td><input type="text" name="roll_number"> </td>
</tr>
<tr>
<td>EMAIL ID:</td>
<td><input type="text" name="email" ></td>
</tr>
<tr>
<td>PASSWORD:</td>
<td><input type="password" name="psw"></td>
</tr>
<td>HALL OF RESIDENCE:</td>
<td><input type="text" name="hall"></td>
</tr>
<tr>
<td></td>
<td><button type="submit">REGISTER</button></td>
</tr>
</table>
</div>
</form>
</body>
</html>