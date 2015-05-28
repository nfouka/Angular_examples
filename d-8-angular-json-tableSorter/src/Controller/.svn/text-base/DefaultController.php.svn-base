<?php

/**
 * @file
 * Contains Drupal\bmi\Controller\DefaultController.
 */

namespace Drupal\bmi\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Drupal\Core\Controller\ControllerBase;


/**
 * Class DefaultController.
 *
 * @package Drupal\bmi\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {

  	return [
  			'#theme' => 'hello_page' ,
  			'#name' => 'mail envoyé' ,
  	];
  }
  
 /*
  * test
  */ 

public function json(Request $request=NULL) {
   
  $string = $request->query->get('q');
  $matches = array();
  if ($string) {
   $query = db_select('pays', 'c');
  $query
      ->condition('c.nom_fr_fr', '%' . db_like($string) . '%', 'LIKE')
      ->fields('c', array('nom_fr_fr'))
      ->orderBy('nom_fr_fr', 'ASC');

  $dept = $query->execute();

  foreach ($dept as $row) {
    $matches[] = $row->nom_fr_fr  ;
  }
  }

  return new JsonResponse($matches);
}

  /*
  public function json($text=''){
     
    /* 
  $results = array();
  $query = " SELECT * FROM {pays} as p1 LEFT JOIN {pays} p2 ON p1.id = p2.id";
  $result = db_query($query)->fetchAll();

  foreach ($result as $row) {
    $results[$row->nom_en_gb] = array(
      
                            'code' => check_plain($row->code) , 
                            'alpha2' => check_plain($row->alpha3) , 
                            'alpha3' => check_plain($row->alpha3) , 
                            'nom_en_gb' => check_plain($row->nom_en_gb) ,  
                            'nom_fr_fr' => check_plain($row->nom_fr_fr) , 

                              );
  }


      
  $results = array();

  $query = db_select('pays', 'c');
  $query
      ->condition('c.nom_fr_fr', '%' . db_like($text) . '%', 'LIKE')
      ->fields('c', array('nom_fr_fr'))
      ->orderBy('nom_fr_fr', 'ASC');

  $dept = $query->execute();

  foreach ($dept as $row) {
    $results[$row->nom_fr_fr] = $row->nom_fr_fr  ;
  }
        
    return new \Symfony\Component\HttpFoundation\JsonResponse($result) ; 
      
  }
  */
  

}
