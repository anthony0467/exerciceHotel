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
	$client3 = new Client('Paul', 'Rudd');
	// HOTEL
	$hotel = new Hotel('Hilton **** Strasbourg', '10 route de la Gare', '67000', 'Strasbourg');
	$hotelParis = new Hotel('Régent **** Paris', '10 route de gaule', '75000', 'Paris');
	//CHAMBRE

	foreach(range(1,30) as $num){
		if($num <= 15){
			${'chambreH'.$num} = new Chambre($hotel, $num,120,false);
			${'chambreR'.$num} = new Chambre($hotelParis, $num,120,false);
		}else{
			${'chambreH'.$num} = new Chambre($hotel, $num,300,true);
			${'chambreR'.$num} = new Chambre($hotelParis, $num,300,true);
		}
	}



	//RESERVATION
	$resa1 = new Reservation($client1, $chambreH1, $hotel, '2022-10-05', '2022-10-10');
	$resa1_2 = new Reservation($client1, $chambreH25, $hotel,'2022-12-05', '2022-12-08');
	$resa2 = new Reservation($client2, $chambreH1, $hotel,'2022-07-12', '2022-07-09');

	var_dump($resa1->dureeSejour());

	echo $hotel->afficherInfoHotel();
	echo $hotel->afficherReservationHotel();
	echo $hotel->afficherChambresHotel();
	echo $hotelParis->afficherChambresHotel();
	echo $client1->afficherResaClient();
	echo $chambreH1->afficherResaChambre();


	?>

</body>

</html>