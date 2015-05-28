<?php

/**
 * @file
 * Contains Drupal\summary\Controller\DefaultController.
 */

namespace Drupal\summary\Controller;

use Drupal\Core\Controller\ControllerBase;

class DefaultController extends ControllerBase {




  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {

      

    return [
        '#type' => 'markup',
        '#markup' => 'Salut Monsieur '.$name
    ];
  }
}
