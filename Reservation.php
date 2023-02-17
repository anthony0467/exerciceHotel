<?php

class Reservation
{
	private Client $client;
	private Chambre $chambre;
	private DateTime $dateDebut;
	private DateTime $dateFin;

	public function __construct(Client $client, Chambre $chambre, string $dateDebut, string $dateFin)
	{
		$this->client = $client;
		$this->chambre = $chambre;
		$this->dateDebut = new DateTime($dateDebut);
		$this->dateFin = new DateTime($dateFin);
		$this->client->addReservation($this);
		$this->chambre->addReservation($this);
	}

	//SET

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

	//GET

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

	public function afficherDateDebut(){
		$date_String_debut = $this->dateDebut->format('d-m-Y');
		return $date_String_debut;
	}

	public function afficherDateFin(){
		$date_String_Fin = $this->dateFin->format('d-m-Y');
		return $date_String_Fin;
	}

	public function __toString(){
		return $this->afficherDateDebut(). ' au ' .$this->afficherDateFin();
	}



}
