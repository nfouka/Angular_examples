<?php

namespace Drupal\mortgage_calculator\Form;

use Drupal\Core\Form\FormInterface;

class MortgageCalculatorForm implements FormInterface {

  public function getFormID() {
    return 'mortgage_calculator_form';
  }

  public function buildForm(array $form, array &$form_state) {

    $form['mortgage_calculator_loan_amount'] = array(
      '#type' => 'textfield',
      '#title' => t('Price of Home'),
      '#default_value' => \Drupal::state()->get('mortgage_calculator_loan_amount'),
      '#size' => 10,
      '#maxlength' => 64,
  //    '#description' => t(''),
    );
    $form['mortgage_calculator_mortgage_rate'] = array(
      '#type' => 'textfield',
      '#title' => t('Mortgage Rate'),
      '#default_value' => \Drupal::state()->get('mortgage_calculator_mortgage_rate'),
      '#size' => 10,
      '#maxlength' => 64,
  //    '#description' => t(''),
    );
    $form['mortgage_calculator_years_to_pay'] = array(
      '#type' => 'textfield',
      '#title' => t('Years to Pay'),
      '#default_value' => \Drupal::state()->get('mortgage_calculator_years_to_pay'),
      '#size' => 10,
      '#maxlength' => 64,
  //    '#description' => t(''),
    );
    $form['mortgage_calculator_desired_display'] = array(
      '#type' => 'select',
      '#title' => t('Desired table display'),
      '#default_value' => \Drupal::state()->get('mortgage_calculator_desired_display'),
      '#options' => array('monthly' => t('monthly'), 'yearly' => t('yearly')),
      '#description' => t(''),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Calculate')
    );

    return $form;
  }

  public function validateForm(array &$form, array &$form_state) {
    if ($form_state['values']['mortgage_calculator_years_to_pay'] == '' || $form_state['values']['mortgage_calculator_years_to_pay'] <= 0) {
      form_set_error('mortgage_calculator_years_to_pay', t('Please enter a value of years to pay.'));
    }
  }

  public function submitForm(array &$form, array &$form_state) {

    foreach ($form_state['values'] as $key => $value) {
      \Drupal::state()->set($key, $value);
    }

    $form_state['redirect'] = 'mortgage-calculator';
  }
}

