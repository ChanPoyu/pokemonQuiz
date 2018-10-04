<?php 
	include('connectDB.php');
	$pdo = db_conn();

	$sql = 'SELECT * FROM pokedex';
	$stmt = $pdo->prepare($sql);
	$status = $stmt->execute();

	if($status==false){
  		// エラーのとき
		errorMsg($stmt);
	}else{
  		// エラーでないとき
		
	}

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Get Your Pokemon</title>
	<style type="text/css">
		#pokemon_choose{
			display: flex;
			width: 70%;
			height: 100%;		
			margin: auto;
			justify-content: space-between;
		}
		.display_pokemon{
			margin: 15px;
		}
		#navBar{
			display: flex;
			width: 500px;
			height: 100px;
			margin: auto;
			justify-content: center;
			align-items: center;
		}
		.navbarlink{
			margin: 10px;
		}
	</style>

</head>
<body>

	<h1 style="text-align: center">Pokedex</h1>

	<div id="navBar">

		<a href="login.php" class="navbarlink">Log In</a>	

	</div>


	<div id="pokemon_choose" style="display: flex;">
			<?php

				$coloum1 = '<div id="pokemon_choose_1">';
				$coloum2 = '<div id="pokemon_choose_2">';
				$coloum3 = '<div id="pokemon_choose_3">';
				$coloum4 = '<div id="pokemon_choose_4">';
				while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
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
						</div>
					';
					
					if($no % 4 == 1){
						$coloum1 = $coloum1.$display;
					}elseif($no % 4 == 2){
						$coloum2 = $coloum2.$display;
					}elseif($no % 4 == 3){
						$coloum3 = $coloum3.$display;
					}elseif($no % 4 == 0){
						$coloum4 = $coloum4.$display;
					}
				}
				$coloum1 = $coloum1.'</div>';
				$coloum2 = $coloum2.'</div>';
				$coloum3 = $coloum3.'</div>';
				$coloum4 = $coloum4.'</div>';

				echo $coloum1;
				echo $coloum2;
				echo $coloum3;
				echo $coloum4;

			?>
		
	</div>

</body>
</html>