<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehicule
 *
 * @author nadir
 */

namespace Drupal\dev\Model;

class Vehicule {
    //put your code here
    
    private $prix  ; 
    private $couleur  ; 
    
    function __construct($prix, $couleur) {
        $this->prix = $prix;
        $this->couleur = $couleur;
    }
    function getPrix() {
        return $this->prix;
    }

    function getCouleur() {
        return $this->couleur;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setCouleur($couleur) {
        $this->couleur = $couleur;
    }


    public function getString(){
        return "Couleur :".$this->getCouleur()." , Prix :".$this->getPrix() ; 
    }
    
}
