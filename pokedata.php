<?php
	
	$no = $_POST["no"];
	$name = $_POST["name"];

	try{
		$pdo = new PDO('mysql:dbname=pokedex;charset=utf8;host:localhost:3308', 'root', '');
	}catch(PDOExeception $e){
		exit('dbError'.$e -> getMessage());
	}

	$sql = "SELECT Name FROM `pokedex` WHERE No = ".$no."";
	$stmt = $pdo->prepare($sql);
	$status = $stmt->execute();

	if($status == false){
		$error = $stmt->errorInfo();
		exit("sqlError".$error[2]);
	}else{
		while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
			if($name == $result["Name"]){
				echo "correct";
			}else{
				echo "wrong";
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
	