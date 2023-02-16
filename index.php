<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>POO Hotel</h1>

	<?php
	// récupérer les class des autres fichiers

	spl_autoload_register(function ($class_name) {
		require_once $class_name . '.php';
	});
	//CLIENT
	$client1 = new Client('John', 'Doe');
	// HOTEL
	$hotel = new Hotel('Hilton', '10 route de la Gare', '67000', 'Strasbourg');
	//CHAMBRE
	

	echo $hotel->afficherInfoHotel();


	?>

</body>

</html>