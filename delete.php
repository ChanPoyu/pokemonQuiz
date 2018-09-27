<?php 

	$msg = $_GET["msg"];
	$msg = explode(',', $msg);
	$no = $msg[0];
	$account = $msg[1];
	var_dump($msg);


	include('connectDB.php');
	$pdo = db_conn();


	$sql = 'DELETE FROM pokedex WHERE no=:no';
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':no', $no, PDO::PARAM_INT);
	$status = $stmt->execute();

	if($status==false){
	  errorMsg($stmt);
	}else{
	  //select.phpへリダイレクト
	  header('Location: index.php?account='.$account);
	  exit;
	}


 ?>