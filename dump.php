<?php 
	
	$msg = $_GET["msg"];
	$msg = explode(',', $msg);

	$no = $msg[0];
	$account = $msg[1];

	echo $account;
	echo $no;

	include('connectDB.php');
	$pdo = db_conn();

	$sql = 'UPDATE pokedex SET Owner = NULL WHERE No=:no';
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':no', $no, PDO::PARAM_INT);
	$status = $stmt->execute();

	if($status==false){
	  errorMsg($stmt);
	}else{
	  header('Location: myPokemon.php?account='.$account);
	  exit;
	}
 ?>