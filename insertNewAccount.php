<?php 
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_check = $_POST['password_check'];
	$manager_flag = 0;
	$life_flag = 0;

	include('connectDB.php');

	$pdo = db_conn();




	if($password == $password_check){
		$sql = 'INSERT INTO Trainer2(id, name, lid, lpw, manager_flag, life_flag) VALUES(NULL, :name, :email, :password, :managerflag, :lifeflag)';
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':name', $name, PDO::PARAM_STR);
		$stmt->bindValue(':email', $email, PDO::PARAM_STR);
		$stmt->bindValue(':password', $password, PDO::PARAM_STR);
		$stmt->bindValue(':managerflag', $manager_flag, PDO::PARAM_INT);
		$stmt->bindValue(':lifeflag', $life_flag, PDO::PARAM_INT);
		$status = $stmt->execute();

		if($status==false){
		  errorMsg($stmt);
		}else{
		  header('Location: login.php');
		  exit;
		}
	}else{
		header('Location: createNewAccount.php');
		exit;
	}



 ?>