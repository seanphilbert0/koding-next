<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.box{
			width: 30%;
			min-width: 300px;
			border-color: tomato;
			border-style: solid;
			margin-top: 30px;
			padding: 10px;
			border-width: 7px;
			margin-left: auto;
			margin-right: auto;
			-webkit-box-shadow: 10px 10px 13px -2px rgba(0,0,0,0.66);
			-moz-box-shadow: 10px 10px 13px -2px rgba(0,0,0,0.66);
			box-shadow: 10px 10px 13px -2px rgba(0,0,0,0.66);
		}
		body{
			background-color: gold;
		}
	</style>
</head>
<body>
	<div style="text-align: center;" class="box">
		<h1>Welcome to Mysite.com!</h1>
		<h3>For those who already have an account, please click the button below: </h3>
		<a href="login.php" class="btn btn-danger" role="button">Login</a>
		<h3>For those who don't, please click the button below: </h3>
		<a href="register.php" class="btn btn-danger" role="button">Register</a>
	</div>
</body>
</html>