<?php

/**
 * @file
 * Contains Drupal\nadir\Controller\DefaultController.
 */

namespace Drupal\nadir\Controller;

use Drupal\Core\Controller\ControllerBase;

class DefaultController extends ControllerBase {


  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {

 

  // Attach the prettify.js with options array.
  $page['#attached']['js'][] = array(
    'data' =>   drupal_get_path('module', 'nadir').'/js/js.js',
  );

    $element['#attached']['css'][] =  array(
      '#attached' => array(
        'css' => array(
          drupal_get_path('module', 'nadir') . '/css/css.css' => array(),
        ),
  ),
);
    return [
        '#type' => 'markup',
        '#markup' => '<button id="nadir999">Valider value</button>' , 
    ];
  }
}
