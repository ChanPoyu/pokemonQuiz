

<!DOCTYPE html>
<html>
<head>
	<title>Get Your Pokemon</title>
	<style type="text/css">
		#pokemon_choose{
			width: 70%;
			height: 100%;		
			margin: auto;
		}
		.display_pokemon{
			margin: 15px;
		}
	</style>

</head>
<body>

	<h1>Pokemon Quiz</h1>



	<div id="pokemon_choose" style="display: flex;">
		<div id="pokemon_choose_1">
			<?php
				$i = 0;
				while ( $i < 802){
					if($i % 4 == 0){
						$no = $i + 1;
						$image_url = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/'.$no.'.png';
						$display = '
							<div class="display_pokemon" id="pokemon'.$no.'">
								<p>
								who am i?<br>
								No'.$no.'
								</p>
								<image src="'.$image_url.'" height="92" weight="92">
								<form action="pokedata.php" method="post">
								<input type="number" name="no" value="'.$no.'" style="display: none;">
								<input type="text" name="name" placeholder="what\'s my name?">
								<input type="submit" name="submit" value="submit" >
								</form>
							</div>
						';
						echo $display;
					}
					$i ++;
				}
			?>
		</div>
		<div id="pokemon_choose_2">
			<?php
				$i = 0;
				while ( $i < 802){
					if($i % 4 == 1){
						$no = $i + 1;
						$image_url = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/'.$no.'.png';
						$display = '
							<div class="display_pokemon" id="pokemon'.$no.'">
								<p>
								who am i?<br>
								No'.$no.'
								</p>
								<image src="'.$image_url.'" height="92" weight="92">
								<form action="pokedata.php" method="post">
								<input type="number" name="no" value="'.$no.'" style="display: none;">
								<input type="text" name="name" placeholder="what\'s my name?">
								<input type="submit" name="submit" value="submit" >
								</form>
							</div>
						';
						echo $display;
					}
					$i ++;
				}
			?>
		</div>
		<div id="pokemon_choose_3">
			<?php
				$i = 0;
				while ( $i < 802){
					if($i % 4 == 2){
						$no = $i + 1;
						$image_url = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/'.$no.'.png';
						$display = '
							<div class="display_pokemon" id="pokemon'.$no.'">
								<p>
								who am i?<br>
								No'.$no.'
								</p>
								<image src="'.$image_url.'" height="92" weight="92">
								<form action="pokedata.php" method="post">
								<input type="number" name="no" value="'.$no.'" style="display: none;">
								<input type="text" name="name" placeholder="what\'s my name?">
								<input type="submit" name="submit" value="submit" >
								</form>
							</div>
						';
						echo $display;
					}
					$i ++;
				}
			?>
		</div>
		<div id="pokemon_choose_4">
			<?php
				$i = 0;
				while ( $i < 802){
					if($i % 4 == 3){
						$no = $i + 1;
						$image_url = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/'.$no.'.png';
						$display = '
							<div class="display_pokemon" id="pokemon'.$no.'">
								<p>
								who am i?<br>
								No'.$no.'
								</p>
								<image src="'.$image_url.'" height="92" weight="92">
								<form action="pokedata.php" method="post">
								<input type="number" name="no" value="'.$no.'" style="display: none;">
								<input type="text" name="name" placeholder="what\'s my name?">
								<input type="submit" name="submit" value="submit" >
								</form>
							</div>
						';
						echo $display;
					}
					$i ++;
				}
			?>
		</div>
	</div>
	


</body>
</html>