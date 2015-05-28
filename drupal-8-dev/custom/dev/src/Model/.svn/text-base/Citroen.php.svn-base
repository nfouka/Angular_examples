<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\dev\Model;

/**
 * Description of Citroen
 *
 * @author nadir
 */
class Citroen extends Vehicule implements ColorInterface{
    //put your code here

    private $avantage  ;    function getAvantage() {
        return $this->avantage;
    }

    function __construct($avantage,$prix, $couleur) {
        $this->avantage = $avantage;
        parent::__construct($prix, $couleur) ; 
    }

    
    public function getCouleur(){
        return "rouge"; 
    }
    public function getPuissance(){
        return "330 ch"; 
    }
    public function getPrix(){
        return "32000 €"; 
    }

    public function getString() {
       return  parent::getString()." , Avantage :".$this->getAvantage() ;
    }
    
}
