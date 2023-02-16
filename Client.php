<?php 

class Client{

	private string $firstName;
	private string $lastName;

	public function __construct(string $firstName, string $lastName)
	{
		$this-> firstName = $firstName;
		$this-> lastName = $lastName;
	}

	// SET

	public function set_firstName(string $firstName){
		$this-> firstName = $firstName;
	}

	public function set_lastName(string $lastName){
		$this-> lastName = $lastName;
	}

	//GET

	public function get_firstName(){
		return $this->firstName;
	}

	public function get_lastName(){
		return $this->lastName;
	}

	public function __toString(){
		return $this->get_firstName(). ' ' .$this->get_lastName() ;
	}
}
