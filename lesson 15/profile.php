<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header("location: home.php");
	} 	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
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
<div class="box" style="text-align: center;">
	<h1>
		<?php  
		echo "Welcome ".$_SESSION['username'];
		?>
	</h1>
	<a href="logout.php" class="btn btn-danger" role="button">Logout</a>
</div>
</body>
</html>