<?php 
	session_start();
	$account = $_SESSION["account"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new Pokemon</title>
</head>
<body>
	
	
	<form action="insert.php" method="post">
		<label for="name">name<input type="text" name="name"></label>
		<br>
		image url<input type="url" name="url">
		<input type="hidden" name="account" value="<?=$account?>">
		<input type="submit" name="add" value="add">
	</form>

	<a href="index.php">back to main page</a>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>