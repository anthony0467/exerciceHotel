<?php

class Client
{

	private string $firstName;
	private string $lastName;
	private array $reservations;

	public function __construct(string $firstName, string $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->reservations = [];
	}


	public function addReservation($reservation)
	{
		$this->reservations[] = $reservation;
	}

	// SET

	public function set_firstName(string $firstName)
	{
		$this->firstName = $firstName;
	}

	public function set_lastName(string $lastName)
	{
		$this->lastName = $lastName;
	}

	//GET

	public function get_firstName()
	{
		return $this->firstName;
	}

	public function get_lastName()
	{
		return $this->lastName;
	}

	public function __toString()
	{
		return $this->get_firstName() . ' ' . $this->get_lastName();
	}



	public function afficherResaClient()
	{
		$total = 0;
		$result = '<h3>Réservation de ' . $this . '</h3><ul>';
		foreach ($this->reservations as $reservation) {
			$prixSejour = $reservation->dureeSejour() * $reservation->get_chambre()->get_price();
			$total += $prixSejour;
			$result .= '<li>Hotel ' . $reservation->get_chambre()->get_hotel() . '/ Chambre: ' . $reservation->get_chambre() . '(' . $reservation->get_chambre()->get_nbLit() . 'lits-' . $reservation->get_chambre()->get_price(). ' € ' .$reservation->get_chambre()->wifi().')du ' .$reservation. ' Prix: ' .$prixSejour. ' €</li>';
		}
		return $result. 'Total: '.$total. ' € </ul>';
	}
}
