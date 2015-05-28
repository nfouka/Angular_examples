<?php

namespace Drupal\mortgage_calculator\Form;

use Drupal\Core\Form\FormInterface;


class MortgageCalculatorJSForm implements FormInterface {

  public function getFormID() {
    return 'mortgage_calculator_js_form';
  }

  public function buildForm(array $form, array &$form_state) {
    $form['loan_amount_2'] = array(
      '#type' => 'textfield',
      '#title' => t('Price of Home'),
      '#size' => 10,
      '#maxlength' => 64,
  //    '#description' => t(''),
    );
    $form['mortgage_rate_2'] = array(
      '#type' => 'textfield',
      '#title' => t('Mortgage Rate'),
      '#size' => 10,
      '#maxlength' => 64,
  //    '#description' => t(''),
    );
    $form['years_to_pay_2'] = array(
      '#type' => 'textfield',
      '#title' => t('Years to Pay'),
      '#size' => 10,
      '#maxlength' => 64,
  //    '#description' => t(''),
    );

    $form['#executes_submit_callback'] = FALSE;
    $form['calculate_2'] = array(
      '#type' => 'button',
      '#value' => t('Calculate'),
    );

    $form['result_2'] = array(
      '#type' => 'textfield',
      '#title' => t('Monthly Payment'),
      '#size' => 10,
      '#maxlength' => 64,
      '#attributes' => array('readonly' => array('readonly')),
  //    '#description' => t(''),
    );

//    $form['#attached']['library'][] = array('mortgage_calculator', 'mortgage_calculator');

    // attach js and required js libraries
    $form['#attached']['library'][] = array('system', 'jquery');
    $form['#attached']['library'][] = array('system', 'drupal');
    $form['#attached']['js'][] = array('data' => drupal_get_path('module', 'mortgage_calculator') . '/mortgage_calculator.js', 'type' => 'file');

    return $form;
  }

  public function validateForm(array &$form, array &$form_state) {

  }

  public function submitForm(array &$form, array &$form_state) {

  }
}

