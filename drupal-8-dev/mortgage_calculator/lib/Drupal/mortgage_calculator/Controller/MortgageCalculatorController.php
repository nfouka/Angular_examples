<?php
/**
 * @file
 * Contains \Drupal\mortgage_calculator\Controller\MortgageCalculatorController.
 */

namespace Drupal\mortgage_calculator\Controller;


/**
 * Controller routines for help routes.
 */
class MortgageCalculatorController {


  /**
   * Prints a page listing a glossary of Drupal terminology.
   *
   * @return string
   *   An HTML string representing the contents of help page.
   */
  public function mortgageCalculatorPage() {

    $loan_amount = \Drupal::state()->get('mortgage_calculator_loan_amount');
    $mortgage_rate = \Drupal::state()->get('mortgage_calculator_mortgage_rate');
    $years_to_pay = \Drupal::state()->get('mortgage_calculator_years_to_pay');
    $desired_display = \Drupal::state()->get('mortgage_calculator_desired_display');

    $output = array(
      '#attached' => array(
        'css' => array(drupal_get_path('module', 'help') . '/css/help.module.css'),
      ),
      '#markup' => '<h2>' . t('Help topics') . '</h2>' . theme('mortgage_calculator', array(
        'loan_amount' => $loan_amount,
        'mortgage_rate' => $mortgage_rate,
        'years_to_pay' => $years_to_pay,
        'desired_display' => $desired_display)),
    );
    return $output;
  }

}
