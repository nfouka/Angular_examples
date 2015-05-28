<?php

namespace Drupal\acme\Model;

class Client {
	
	protected $name ; 
	protected $salary ;
	protected $adress ; 
	
	
	
	/**
	 * @return the string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 *
	 * @param string $name        	
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getSalary() {
		return $this->salary;
	}
	
	/**
	 *
	 * @param string $salary        	
	 */
	public function setSalary($salary) {
		$this->salary = $salary;
		return $this;
	}
	 
	public function __construct($name,$salary,$adress){
		$this->setName($name) ; 
		$this->setSalary($salary) ; 
		$this->setAdress($adress) ; 
		
	}
	public function getAdress() {
		return $this->adress;
	}
	public function setAdress($adress) {
		$this->adress = $adress;
		return $this;
	}
	
	public function toString() {
		return $this->getName().':'.$this->getSalary().':'.$this->getAdress() ; 
	}

}