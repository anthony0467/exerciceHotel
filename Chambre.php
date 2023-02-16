<?php
class Chambre
{
	private int $totalChambre;
	private int $chambreReserve;
	private int $chambreDispo;
	private float $price;
	private bool $wifi;

	public function __construct(int $totalChambre, int $chambreReserve, int $chambreDispo)
	{
		$this->totalChambre = $totalChambre;
		$this->chambreReserve = $chambreReserve;
		$this->chambreDispo = $chambreDispo;
		$this->price = 120;
		$this->wifi = false;
	}

	//SET

	public function set_totalChambre(int $totalChambre)
	{
		$this->totalChambre = $totalChambre;
	}

	public function set_chambreReserve(int $chambreReserve)
	{
		$this->totalChambre = $chambreReserve;
	}

	public function set_chambreDispo(int $chambreDispo)
	{
		$this->chambreDispo = $chambreDispo;
	}

	public function set_price(float $price)
	{
		$this->price = $price;
	}

	public function set_wifi(bool $wifi)
	{
		$this->wifi = $wifi;
	}

	//GET

	public function get_totalChambre()
	{
		return $this->totalChambre;
	}

	public function get_chambreReserve()
	{
		return $this->chambreReserve;
	}

	public function get_chambreDispo()
	{
		return $this->chambreDispo;
	}

	public function get_price()
	{
		return $this->price;
	}

	public function get_wifi()
	{
		return $this->wifi;
	}

	public function __toString()
	{
		return $this->get_totalChambre();
	}
}
