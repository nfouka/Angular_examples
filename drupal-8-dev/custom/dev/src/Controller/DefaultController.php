<?php

/**
 * @file
 * Contains Drupal\dev\Controller\DefaultController.
 */

namespace Drupal\dev\Controller;

use Drupal\Core\Controller\ControllerBase;

class DefaultController extends ControllerBase {




  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
      
      
      $message = "" ; 
      
      $resultQuery = BdContactStorage::getAll() ; 
      foreach ($resultQuery as $resultQuery){
          $message .= '<div><b>Nom :</b>'.$resultQuery->name." '<b> , Message :</b>'.".$resultQuery->message.'</div>' ; 
      }
      
      $v1  = new \Drupal\dev\Model\Citroen("10 ans de garantie","24600 €","Noir") ; 
      $v2  = new \Drupal\dev\Model\Citroen("5 ans de garantie","14600 €","Vert") ; 
      $v3  = new \Drupal\dev\Model\Citroen("3 ans de garantie","3600 €","Bleu") ; 
      
    return [
        '#type' => 'markup',
        '#markup' => 'Citroen :'.$v1->getString()."<br>".$v2->getString()."<br>".$v3->getString()."<br> Collection".$message , 
    ];
  }
  
    public function all() {
      
      
      $v1  = new \Drupal\dev\Model\Citroen("10 ans de garantie","24600 €","Noir") ; 
      $v2  = new \Drupal\dev\Model\Citroen("5 ans de garantie","14600 €","Vert") ; 
      $v3  = new \Drupal\dev\Model\Citroen("3 ans de garantie","3600 €","Bleu") ; 
      
    return [
        '#type' => 'markup',
        '#markup' => 'Citroen :'.$v1->getString()."<br>".$v2->getString()."<br>".$v3->getString() , 
    ];
  }
  
  
}
