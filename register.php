<?php
session_start();
$db=mysqli_connect("localhost","root","test123","authentication");
if (isset($_POST['register_btn'])) {
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	if ($password==$password2) {
		$sql="INSERT INTO users(username,email,password) VALUES('$username','$email',$password)";
		mysqli_query($db,$sql);
		$_SESSION['message']="You are now logged in";
		$_SESSION['username']=$username;
		header("location:home.php");
	}
	else
	{
		 $_SESSION['message']="The two passwords do not match";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<style>
body {
background:linear-gradient(to right, #78a7ba 0%, #385D6C 50%, #78a7ba 99%);}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 4px #999;
}
.button:hover {
background-color: #3e8e41
}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(2px);
}
.fi{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 40px 0px 10px 0px;
	border: 1px solid #000000;
	padding: 20px;
	box-shadow: inset 0px 0px 15px #000000;
	-moz-box-shadow: inset 0px 0px 15px #000000;
	-webkit-box-shadow: inset 0px 0px 15px #000000;
}
.header
{
	background-color: #1A3333;
	color: white;
	text-align: center;
	top:0px;
	width: 100%;
	padding: 5px;
}
form
{
	width: 40%;
	padding: 30px;
	border: 1px solid #5E6E66;
	font-size: 16px;
	font-color:white;
	padding: 1px;
	width: 100%;
}
.textInput{
	margin-top: 2px;
	height: 28px;
	border: 1px solid #5E6E66;
	font-size: 16px;
	padding: 1px;
	width: 100%;
}
#error_msg
{
	width: 50%;
	margin: 5px auto;
	height: 30px;
	border: 1px solid #FF0000;
	background: #FFB9BB;
	color: #FF0000;
	text-align: center;
	padding-top: 10px;
}
td
{
	text-align: right;
}

</style>
	<title>

		REGISTRATION
	</title>

</head>
<body style="background-image: url('sss.jpg.jpg');">
	<div class="header">
		<h1>Register USER</h1>
	</div>
	<?php
		if (isset($_SESSION['message'])) {
			echo "<div id='error_msg'>".$_SESSION['message']."</div>";
			unset($_SESSION['message']);
		}


	?>
			<form method="post" action="register.php" > 
		<fieldset class="fi"><legend style=" font-weight: bold;">Personal</legend>
		<table>
			<tr>
				<td style="font-weight: bold;">UserName:</td>
				<td><input type="text" name="username" class="textInput" align="middle" placeholder="Enter your Name" required="required"></td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Email:</td>
				<td><input type="email" name="email" class="textInput" placeholder="Email" required="required"></td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Password:</td>
				<td><input type="password" name="password" class="textInput" placeholder="Password" required="required"></td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Confirm Password:</td>
				<td><input type="password" name="password2" class="textInput" placeholder="Confirm Password" required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="button" type="submit" name="register_btn" value="Register"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>