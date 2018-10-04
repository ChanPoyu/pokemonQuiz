<?php 
	
	$lid = $_POST["account"];
	$lpw = $_POST["password"];

	include('connectDB.php');
	$pdo = db_conn();


	$sql = 'SELECT * FROM Trainer2 WHERE lid=:lid AND lpw=:lpw';
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
	$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
	$status = $stmt->execute();

	if($status == false){
		queryError($stmt);
	}

	$result = $stmt->fetch();

	if($result['id'] == ''){
		header('Location: login.php');
		exit();
	}else{
		session_start();
		$_SESSION['account'] = $lid;
		$_SESSION['manager_flag'] = $result['manager_flag'];
		header('Location: index.php');
		exit();
	}

 ?>