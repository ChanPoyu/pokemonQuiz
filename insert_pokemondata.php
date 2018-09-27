<?php
// insert pokemon data

	$connect = mysqli_connect("localhost", "root", "", "pokedex");

	$filename = 'pokemon_data.json';

	$data = file_get_contents($filename);

	$array = json_decode($data, true);

	$i = 0;

	foreach($array as $row){

		$i ++;

		$image_url = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/'.$i.'.png';

		$sql = 'INSERT INTO pokedex(No, Name, Owner, imgURL) VALUES ('.$i.', "'.$row.'", NULL, "'.$image_url.'")';

		echo $sql;
		echo "<br>";
		
		mysqli_query($connect, $sql);

	}


	echo "pokemon data inserted";
?>