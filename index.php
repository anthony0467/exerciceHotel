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
	$client2 = new Client('Jane', 'Doe');
	// HOTEL
	$hotel = new Hotel('Hilton **** Strasbourg', '10 route de la Gare', '67000', 'Strasbourg');
	$hotelParis = new Hotel('Régent **** Paris', '10 route de gaule', '75000', 'Paris');
	//CHAMBRE
	$chambre1 = new Chambre($hotel, '1', 120, false);
	$chambre2 = new Chambre($hotel, '2', 300, true);
	//RESERVATION
	$resa1 = new Reservation($client1, $chambre1);
	$resa1_2 = new Reservation($client1, $chambre2);
	$resa2 = new Reservation($client2, $chambre1);

	echo $hotel->afficherInfoHotel();
	echo $hotel->afficherChambresHotel();
	echo $hotelParis->afficherChambresHotel();
	echo $client1->afficherResaClient();
	echo $chambre1->afficherResaChambre();


	?>

</body>

</html>