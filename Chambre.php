<?php
class Chambre
{
	private string $numeroChambre;
	private bool $etatChambre;
	private float $price;
	private int $nbLit;
	private bool $wifi;
	private Hotel $hotel;
	private array $reservations;

	public function __construct(Hotel $hotel, string $numeroChambre, float $price, bool $wifi = true)
	{
		$this->numeroChambre = $numeroChambre;
		$this->etatChambre = true;
		$this->nbLit = 2;
		$this->wifi = $wifi;
		$this->price = $price;
		$this->hotel = $hotel;
		$this->reservations = [];
		$this->hotel->addChambre($this);
	}

	public function addReservation($reservation)
	{
		$this->reservations[] = $reservation;
	}

	public function reserver() {
		$this->etatChambre = false;
	  }

	/*public function get_reserver() {
		return $this->etatChambre;
	  }*/


	//SET

	public function set_numeroChambre(string $numeroChambre)
	{
		$this->numeroChambre = $numeroChambre;
	}

	public function set_etatChambre(int $etatChambre)
	{
		$this->etatChambre = $etatChambre;
	}

	public function set_price(float $price)
	{
		$this->price = $price;
	}

	public function set_wifi(bool $wifi)
	{
		$this->wifi = $wifi;
	}

	public function set_hotel(Hotel $hotel)
	{
		$this->hotel = $hotel;
	}

	public function set_nbLit(int $nbLit)
	{
		$this->nbLit = $nbLit;
	}

	//GET

	public function get_numeroChambre()
	{
		return $this->numeroChambre;
	}

	public function get_etatChambre()
	{
		return $this->etatChambre;
	}

	public function get_price()
	{
		return $this->price;
	}

	public function get_wifi()
	{
		return $this->wifi;
	}

	public function get_hotel()
	{
		return $this->hotel;
	}

	public function get_nbLit()
	{
		return $this->nbLit;
	}

	//STRING

	public function __toString()
	{
		return $this->numeroChambre;
	}

	public function wifi()
	{
		if ($this->wifi == false) {
			return 'Wifi: non';
		} else {
			return 'Wifi: oui';
		}
	}

	public function etat()
	{
		if ($this->etatChambre == false) {
			return 'Indisponible';
		} else {
			return 'Disponible';
		}
	}

	public function afficherResaChambre()
	{
		$result = '<h3>Réservation de la chambre : ' . $this. '</h3><ul>';
		foreach ($this->reservations as $reservation) {
			$result .= '<li> ' .$reservation->get_client(). ' pour la chambre ' .$this. ' du ' .$reservation. '</li>';
		}
		return $result . '</ul>';
	}
}
