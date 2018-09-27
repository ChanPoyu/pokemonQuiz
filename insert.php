<?php

	$account = $_POST["account"];
	$name = $_POST["name"];
	$url = $_POST["url"];

	echo $account;
	echo $name;
	echo $url;

	include("connectDB.php");
	$pdo = db_conn();// insert

	$stmt = $pdo->prepare('INSERT INTO pokedex (No, Name, Owner, imgURL) VALUES(NULL, :a1, :a2, :a3)');
	$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
	$stmt->bindValue(':a2', $account, PDO::PARAM_STR);
	$stmt->bindValue(':a3', $url, PDO::PARAM_STR);
	$status = $stmt->execute();

	if($status==false){
	  errorMsg($stmt);
	}else{
	  //５．index.phpへリダイレクト
	  header('Location: index.php?account='.$account);
	  exit;
	}



?>