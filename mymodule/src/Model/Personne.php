<?php


namespace Drupal\mymodule\Model;

/**
 * @author nadir
 * @version 1.0
 */


class Personne {
	
	
	
	protected $lastName ; 
	protected $firstName ; 
	protected $adress  ;
	
	public function __construct(){
		
		$this->setAdress("34 RUE DU VERCORS APPT 13 - 38000 GRENOBNLE") ; 	
		$this->setFirstName("NADIR ") ; 
		$this->setLastName("FOUKA")  ;  
	}
	
	
	public function getLastName() {
		return $this->lastName;
	}
	public function setLastName($lastName) {
		$this->lastName = $lastName;
		return $this;
	}
	public function getFirstName() {
		return $this->firstName;
	}
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
		return $this;
	}
	public function getAdress() {
		return $this->adress;
	}
	public function setAdress($adress) {
		$this->adress = $adress;
		return $this;
	}
	 
	
}