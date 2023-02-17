<?php

class Reservation
{
	private Client $client;
	private Chambre $chambre;
	private DateTime $dateDebut;
	private DateTime $dateFin;
	private Hotel $hotel;
	private bool $etatChambre;

	public function __construct(Client $client, Chambre $chambre,Hotel $hotel, string $dateDebut, string $dateFin)
	{
		$this->hotel = $hotel;
		$this->client = $client;
		$this->chambre = $chambre;
		$this->etatChambre = true;
		$this->dateDebut = new DateTime($dateDebut);
		$this->dateFin = new DateTime($dateFin);
		$this->client->addReservation($this);
		$this->chambre->addReservation($this);
		$this->hotel->addReservation($this);
	}

	//SET

	public function set_hotel(Hotel $hotel)
	{
		$this->hotel = $hotel;
	}

	public function set_client(Client $client)
	{
		$this->client = $client;
	}

	public function set_chambre(Chambre $chambre)
	{
		$this->chambre = $chambre;
	}

	public function set_dateDebut($dateDebut)
	{
		$this->dateDebut = $dateDebut;
	}

	public function set_dateFin($dateFin)
	{
		$this->dateFin = $dateFin;
	}

	public function set_etatChambre(int $etatChambre)
	{
		$this->etatChambre = $etatChambre;
	}

	//GET

	public function get_hotel()
	{
		return $this->hotel;
	}

	public function get_client()
	{
		return $this->client;
	}

	public function get_chambre()
	{
		return $this->chambre;
	}

	public function get_dateDebut()
	{
		return $this->dateDebut;
	}

	public function get_dateFin()
	{
		return $this->dateFin;
	}

	public function get_etatChambre()
	{
		return $this->etatChambre;
	}

	public function etat()
	{
		if ($this->etatChambre == false) {
			return 'Indisponible';
		} else {
			return 'Disponible';
		}
	}

	public function afficherDateDebut(){
		$date_String_debut = $this->dateDebut->format('d-m-Y');
		return $date_String_debut;
	}

	public function afficherDateFin(){
		$date_String_Fin = $this->dateFin->format('d-m-Y');
		return $date_String_Fin;
	}

	public function dureeSejour(){
		$diff = date_diff($this->dateDebut, $this->dateFin);
		return $diff->format('%d');
	}

	public function __toString(){
		return $this->afficherDateDebut(). ' au ' .$this->afficherDateFin();
	}



}
