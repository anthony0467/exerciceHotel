<?php

class Hotel
{
	private string $nameHotel;
	private string $adress;
	private Chambre $chambre;

	public function __construct(string $nameHotel, string $adress, Chambre $chambre)
	{
		$this->nameHotel = $nameHotel;
		$this->adress = $adress;
		$this->chambre = $chambre;
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
}
