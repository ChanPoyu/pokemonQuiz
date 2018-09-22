<?php
// insert pokemon data

	$connect = mysqli_connect("localhost", "root", "", "pokedex");

	$filename = 'pokemon_data.json';

	$data = file_get_contents($filename);

	$array = json_decode($data, true);

	$i = 0;

	foreach($array as $row){

		$i ++;

		$sql = "INSERT INTO pokedex(No, Name, Owner) VALUES (".$i.", '".$row."', NULL)";
		
		mysqli_query($connect, $sql);

	}


	echo "pokemon data inserted";
?>