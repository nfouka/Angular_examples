<?php

/**
 * @file
 * Contains Drupal\bmi\Form\DefaultForm.
 */

namespace Drupal\bmi\Form;

use Drupal\Core\Form\FormStateInterface;
use \Drupal\Core\Form\FormInterface ; 
/**
 * Class DefaultForm.
 *
 * @package Drupal\bmi\Form
 */
class DefaultForm implements FormInterface {
    
    
    public function buildForm(array $form, FormStateInterface $form_state) {

    $form['pays'] = array(
    '#title' => t('Pays '),
    '#type' => 'textfield',
    '#maxlength' => 60,
    '#autocomplete_route_name' => 'bmi.default_controller_json',
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => 'Submit',
  );
  return $form ;
    }

    public function getFormId() {
        return 'bmi.default_form_config' ; 
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        $test = null  ; 
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
        
    }

}
   

