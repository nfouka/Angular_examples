<?php

/**
 * @file
 * Contains Drupal\first\Controller\DefaultController.
 */

namespace Drupal\first\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\first\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name)
	{
  
		
      return array(
          '#theme' => 'hello_page' , 
          '#name'  => $name , 
          '#form'  => \Drupal::formBuilder()->getForm('\Drupal\first\Form\calculatorForm') , 
          '#form_calc' => \Drupal::formBuilder()->getForm('\Drupal\first\Form\CalculatriceUIForm') , 
      ) ; 
      
	}

  public function calc($name){
    return array(
          '#theme' => 'calc_page' , 
          '#name'  => $name , 
          '#form_calc' => \Drupal::formBuilder()->getForm('\Drupal\first\Form\CalculatriceUIForm') , 
      ) ; 
  }

}
