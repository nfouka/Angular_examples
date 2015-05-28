<?php

/**
 * @file
 * Contains Drupal\bmi\Controller\DefaultController.
 */

namespace Drupal\bmi\Controller;

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
  	return array(
  			'#theme' => 'hello-bmi_page' ,
  			'#name'  => $name ,
  	) ;
  }

}
