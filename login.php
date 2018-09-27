<?php

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<style>
		#loginForm{
			display: flex;
			width: 400px;
			height: 600px;
			margin: 100px auto;
			background: #aaa;
			align-items: center;
			justify-content: center;

		}
		form{
			text-align: center;
		}
		input{

			margin: 30px;
		}
	</style>
</head>
<body>

	<div id="loginForm">
		<form action="userAuthentication.php" method="post">
			Account<input type="text" name="account">
			<br>
			Password<input type="text" name="password">
			<br>
			<input type="submit" value="Log In">
		</form>
	</div>
	
</body>
</html>	