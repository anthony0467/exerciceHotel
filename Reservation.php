<?php 

class Reservation{
	private Client $client;
	private Chambre $chambre;
	private DateTime $date;

	public function __construct(Client $client, Chambre $chambre, DateTime $date)
	{
		$this->client = $client;
		$this->chambre = $chambre;
		$this->date = $date;
	}

	//SET

	public function set_client(Client $client){
		$this->client = $client;
	}

	public function set_chambre(Chambre $chambre){
		$this->chambre = $chambre;
	}

	public function set_date(DateTime $date){
		$this->date = $date;
	}

	//GET

	public function get_client(){
		return $this->client;
	}

	public function get_chambre(){
		return $this->chambre;
	}

	public function get_date(){
		return $this->date;
	}

	

}
