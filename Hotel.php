<?php

class Hotel
{
	private string $nameHotel;
	private string $adress;
	private string $codePostal;
	private string $ville;
	private array $chambres;
	private array $reservations;

	public function __construct(string $nameHotel, string $adress, string $codePostal, string $ville)
	{
		$this->nameHotel = $nameHotel;
		$this->adress = $adress;
		$this->codePostal = $codePostal;
		$this->ville = $ville;
		$this->chambres = [];
		$this->reservations = [];
	}


	public function addChambre($chambre)
	{
		$this->chambres[] = $chambre;
	}

	public function addReservation($reservation)
	{
		$this->reservations[] = $reservation;
	}

	//SET
	public function set_nameHotel(string $nameHotel)
	{
		$this->nameHotel = $nameHotel;
	}

	public function set_adress(string $adress)
	{
		$this->adress = $adress;
	}

	public function set_codePostal(string $codePostal)
	{
		$this->codePostal = $codePostal;
	}

	public function set_ville(string $ville)
	{
		$this->ville = $ville;
	}

	public function nbChambreDispo(){
		$chambreDispo = 0;
		foreach($this->chambres as $chambre){
			if($chambre->get_etatChambre() == true){
				$chambreDispo++;
			}
		}
		return $chambreDispo;
	}

	//GET
	public function get_nameHotel()
	{
		return $this->nameHotel;
	}

	public function get_adress()
	{
		return $this->adress;
	}

	public function get_codePostal()
	{
		return $this->codePostal;
	}

	public function get_ville()
	{
		return $this->ville;
	}

	public function __toString()
	{
		return $this->nameHotel;
	}


	public function afficherInfoHotel()
	{
		echo '<h2>' . $this . '</h2>';
		$result = '<ul><li>' . $this->adress . ' ' . $this->codePostal . ' ' . $this->ville . '</li><li>Nombre de chambres: '.count($this->chambres).'</li><li>Nombre de chambres disponible: ' .$this->nbChambreDispo().  '</li><li>Nombre de chambres indisponible: ' .count($this->chambres) - $this->nbChambreDispo(). '</li></ul>' ;
		return $result;
	}

	public function afficherChambresHotel()
	{
		$result = '<h3>Status des chambres de ' . $this . '</h3><ul>';

		foreach ($this->chambres as $chambre) {
			$result .= '<li> Chambre ' . $chambre . ' prix: ' . $chambre->get_price() . '??? ' . $chambre->wifi() . ' /' .$chambre->etat(). ' </li>';
		}
		return $result . '</ul>';
	}

	public function afficherReservationHotel(){
		$result = "<h3>R??servation de l'hotel " .$this."</h3> <ul>";

		if(count($this->reservations) == 0){
			$result .='Pas de reservation';
		}else{
			foreach($this->reservations as $reservation){
				$result .= "<li>" .$reservation->get_client(). " - Chambre " .$reservation->get_chambre(). " - " .$reservation. "</li>";
			}
		}

		return $result. '</ul>';
	}
}
