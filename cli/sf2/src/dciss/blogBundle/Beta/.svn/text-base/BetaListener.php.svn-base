<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace dciss\blogBundle\Beta;

/**
 * Description of BetaListener
 *
 * @author nadir
 */
        
    class BetaListener
{
  // Notre processeur
  protected $betaHTML;
  // La date de fin de la version bêta :
  // - Avant cette date, on affichera un compte à rebours (J-3 par exemple)
  // - Après cette date, on n'affichera plus le « bêta »
  protected $endDate;
  public function __construct(BetaHTML $betaHTML, $endDate)
  {
    $this->betaHTML = $betaHTML;
    $this->endDate  = new \Datetime($endDate);
  }
  public function processBeta()
  {
    $remainingDays = $this->endDate->diff(new \Datetime())->format('%d');
    if ($remainingDays <= 0) {
      // Si la date est dépassée, on ne fait rien
      return;
    }
    
    // Ici on appelera la méthode
    // $this->betaHTML->displayBeta()
  }
} 