<?php 
	
	$account = $_POST["account"];
	$password = $_POST["password"];

	include('connectDB.php');
	$pdo = db_conn();


	$sql = 'SELECT password FROM Trainer WHERE account=:account';
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':account', $account, PDO::PARAM_STR);
	$status = $stmt->execute();

	$view = '';

	if($status == false){
		// errorMsg($stmt);
		header('Location: login.php');
  		exit;
	}else{
		while($result = $stmt -> fetch(PDO::FETCH_ASSOC)){
			if($result['password'] != $password){
				header('Location: login.php');
		  		exit;
			}elseif($result['password'] == $password){
				 header('Location: index.php?account='.$account);
				 exit;
			}
		}
	}

 ?>