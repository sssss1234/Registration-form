<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
body {
	padding: 0px;
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

		USER
	</title>

</head>
<body style="background-image: url('sss.jpg.jpg');">
	<div class="header">
		<h1>USER</h1>
	</div>
	<?php
		if (isset($_SESSION['message'])) {
			echo "<div id='error_msg'>".$_SESSION['message']."</div>";
			unset($_SESSION['message']);
		}


	?>
	<div><h4>Welcome <?php echo $_SESSION['username'];?></h4></div>
	<div><a href="logout.php">Logout</a>></div>
</body>
</html>