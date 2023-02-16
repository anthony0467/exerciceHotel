<?php
class Chambre
{
	private int $totalChambre;
	private bool $etatChambre;
	private float $price;
	private bool $wifi;

	public function __construct(int $totalChambre)
	{
		$this->totalChambre = $totalChambre;
		$this->etatChambre = true;
		$this->price;
		$this->wifi = false;
	}

	//SET

	public function set_totalChambre(int $totalChambre)
	{
		$this->totalChambre = $totalChambre;
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

	//GET

	public function get_totalChambre()
	{
		return $this->totalChambre;
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

	public function __toString()
	{
		return $this->get_totalChambre();
	}




	public function afficherPrix()
	{
		if ($this->wifi = false) {
			$result = $this->price = .120 . ' €';
		} else {
			$result = $this->price = .300 . ' €';
		}
		return $result;
	}
}
