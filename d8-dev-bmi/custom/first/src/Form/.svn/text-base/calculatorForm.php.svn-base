<?php

/**
 * @file
 * Contains Drupal\first\Form\calculatorForm.
 */

namespace Drupal\first\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class calculatorForm.
 *
 * @package Drupal\first\Form
 */
class calculatorForm implements \Drupal\Core\Form\FormInterface {

 
  public function getFormId() {
    return 'calculator_form';
  }

    public function buildForm(array $form, \Drupal\Core\Form\FormStateInterface $form_state) {
          
 
        
     $form['value_a'] = array(
    '#type' => 'textfield',
    '#title' => t('Value A:'),
    '#size' => 10,
    '#required' => true,
    '#prefix' => '<div style="float:left;">',
    '#suffix' => '</div>',
    );      
        
  $weight_units = array("plus" => "+", "minus" => "-" , "product"=> "*" , "division" =>"/" );
  $form['weight_units'] = array(
    '#type' => 'select',
    '#title' => 'Operation(+,-,*,/) :',
    '#required' => true,
    '#options' => $weight_units,
    '#prefix' => '<div style="float:left;">',
    '#suffix' => '</div><div style="clear:both;"></div>',
    );
    $form['value_b'] = array(
    '#type' => 'textfield',
    '#title' => t('Value B:'),
    '#size' => 10,
    '#required' => true,
    '#prefix' => '<div style="float:left;">',
    '#suffix' => '</div>',
    );
    
       $form['btn'] = array(
    '#type' => 'button',
    '#value' => 'Get Result ' , 
    '#markup' => '',
  );
    
      $form['result'] = array(
    '#type' => 'markup',
    '#prefix' => '<div id="value_calculate_wrapper">',
    '#suffix' => '</div>',
    '#markup' => '',
  );
    
  return $form ; 
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
        
    }

}
