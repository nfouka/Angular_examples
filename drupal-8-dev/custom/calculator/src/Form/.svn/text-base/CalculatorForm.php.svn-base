<?php

/**
 * @file
 * Contains Drupal\calculator\Form\CalculatorForm.
 */

namespace Drupal\calculator\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormInterface;

class CalculatorForm implements FormInterface
{

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'calculator_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {


//$page['#attached']['js'][]  = drupal_get_path('theme', 'bartik') . '/js/calculator.js';
// $element['#attached']['css'][] = drupal_get_path('theme', 'bartik') . '/css/calculator.css';

  $path = drupal_get_path('module', 'calculator');
  $element['#attached']['js'][$path . '/js/calculator.js'] = array('every_page' => TRUE);


//$element['#attached']['js'][] = drupal_get_path('theme', 'bartik') . '/js/misc.js';
   
   //$form['#attached'] = array('js' => array( drupal_get_path('module', 'calculator').'/js/calculator.js'));

    //drupal_add_js('js/calculator.js');

   // $form['#attached']['css'] = array(
   //   drupal_get_path('module', 'calculator').'/custom/css/calculator.css' 
   // );

    $form['display'] = [
      '#type' => 'textfield',
      '#title' => '',
      '#description' => '',
      '#default_value' => "Tape your value",
    
    ];

    $form['Enter'] = [
     '#type' => 'button',
      '#value' => 'E N T E R',
      '#title' => t('ENTER'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'enter',
      ),
      '#default_value' => 'enter',
      '#prefix' => '<div>loading ...</div>',
    ];
   
    
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    return parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    //parent::submitForm($form, $form_state);
    //drupal_set_message(' message OK') ; 
  }
}
