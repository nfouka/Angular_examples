<?php

/**
 * @file
 * Contains Drupal\acme\Controller\DefaultController.
 */

namespace Drupal\acme\Controller;

use Drupal\Core\Controller\ControllerBase;

class DefaultController extends ControllerBase {




  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
      
     //simple_mail_send("nadir.fouka@gmail.com","nadir.fouka@gmail.com", "d8", "salut");
      
      
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Hello @name!', ['@name' => $name])
    ];
  }
}
