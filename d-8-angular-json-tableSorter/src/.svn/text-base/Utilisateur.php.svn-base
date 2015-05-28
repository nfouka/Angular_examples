<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\bmi;

/**
 * Description of Utilisateur
 *
 * @author nadir
 */
class Utilisateur {
    
        protected $name ; 
        protected $adress ; 
        protected $country  ; 

    function __construct($name, $adress, $country) {
        $this->name = $name;
        $this->adress = $adress;
        $this->country = $country;
    }

    public function toString(){
        return $this->getName().' , '.$this->getName().' , '.$this->getCountry()  ; 
    }
    
    function getName() {
        return $this->name;
    }

    function getAdress() {
        return $this->adress;
    }

    function getCountry() {
        return $this->country;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAdress($adress) {
        $this->adress = $adress;
    }

    function setCountry($country) {
        $this->country = $country;
    }


}
