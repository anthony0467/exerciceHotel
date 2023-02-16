<?php

class Hotel
{
	private string $nameHotel;
	private string $adress;
	private string $codePostal;
	private string $ville;
	private Chambre $chambre;

	public function __construct(string $nameHotel, string $adress, string $codePostal, string $ville)
	{
		$this->nameHotel = $nameHotel;
		$this->adress = $adress;
		$this->codePostal = $codePostal;
		$this->ville = $ville;
		//$this->chambre = $chambre;
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

	public function set_chambre(Chambre $chambre)
	{
		$this->chambre = $chambre;
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

	public function get_chambre()
	{
		return $this->chambre;
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
		$result = '<ul><li>' . $this->adress . ' ' . $this->codePostal . ' ' . $this->ville . '</li></ul>';
		return $result;
	}
}
