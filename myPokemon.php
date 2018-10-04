<?php  
	session_start();
	$account = $_SESSION["account"];
	include('connectDB.php');
	$pdo = db_conn();


	$sql = 'SELECT * FROM pokedex WHERE Owner=:account';
	$stmt = $pdo->prepare($sql);
	$stmt -> bindValue(':account', $account, PDO::PARAM_STR);
	$status = $stmt->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Pokemon</title>
	<script>
		function confirmDump(){
			var del=confirm("Are you sure to delete me from your pokedex?");
			if (del==true){
				// console.log("deleted");
			   	document.location = "dump.php?action=DoThis";
			}else{
				return del;
			}
		}	
	</script>

</head>
<body>

	<h1>My pokemons</h1>

	<?php 

		while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

			$no = $result["No"];
			$name = $result["Name"];
			$image_url = $result["imgURL"];

			$display = '
						<div class="display_pokemon" id="pokemon'.$no.'">
							<p>
							No'.$no.'  '.$name.'
							</p>
							<image src="'.$image_url.'" height="92" weight="92">
							<br>
							<a href="dump.php?msg='.$no.','.$account.'" onclick="return confirmDump()">[dump]</a>
						</div>
					';
			echo $display;
		}

		
	 ?>

	<a href="index.php?account='.$account.'">back to main page</a>

	
</body>
</html>