<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace dciss\blogBundle\Services;

/**
 * Description of MesServicesMails
 *
 * @author nadir
 */
class MesServicesMails {
    //put your code here
    
    protected $name ; 
    protected $salary ; 

   

    function getName() {
        return $this->name;
    }

    function getSalary() {
        return $this->salary;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSalary($salary) {
        $this->salary = $salary;
    }

        public function isSpam($text)
        {
          return strlen($text) < 5 ? "Un Spam":"Ce n'est pas Spam " ;
        } 
    
        
        public function toString(){
            return 'Personne [name] :'.$this->getName().' , [Salary] :'.$this->getSalary() ; 
        }
     
}
