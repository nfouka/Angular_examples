<?php

namespace Drupal\mortgage_calculator;

class MortgageCalculatorCalculation {

  private $loan_amount;
  private $mortgage_rate;
  private $years_to_pay;
  private $desired_display;

  /**
   * Construct
   *
   * @param $loan_amount - a loan amount
   * @param $mortgage_rate - a mortgage rate
   * @param $years_to_pay - years to pay
   * @param $desired_display - possible values 'monthly' or 'yearly'
   *
   */
  public function __construct($loan_amount, $mortgage_rate, $years_to_pay, $desired_display) {
    $this->loan_amount = $loan_amount;
    $this->mortgage_rate = $mortgage_rate;
    $this->years_to_pay = $years_to_pay;
    $this->desired_display = $desired_display;
  }

  /**
   * Calculation function
   *
   * @return array where:
   *  - a key 'rows' contains array of rows with $desired_display mortgage calculations
   *  - a key 'number_of_payments' - a number of payments
   *  - a key 'payment' - an amount of payments
   */
  public function calculate() {
    if($this->desired_display == 'monthly') {
      $rate_per = ($this->mortgage_rate / 100) / 12;
      $number_of_payments = $this->years_to_pay * 12;
    }
    else {
      $rate_per = $this->mortgage_rate / 100;
      $number_of_payments = $this->years_to_pay;
    }

    if($this->mortgage_rate != 0) {
      $payment = ($this->loan_amount * pow(1 + $rate_per,$number_of_payments) * $rate_per) / (pow(1 + $rate_per, $number_of_payments) - 1);
    }
    else {
      $payment = $this->loan_amount / $number_of_payments;
    }

    $beginning_balance = $this->loan_amount;
    for($i=1; $i <= $number_of_payments; $i++) {
      $interest = $rate_per * $beginning_balance;
      $rows[] = array($i, round($beginning_balance), round($interest), round($payment), abs(round($beginning_balance - ($payment - $interest))));
      $beginning_balance -= $payment - $interest;
    }

    return array('rows' => $rows, 'row' => array('number_of_payments' => $number_of_payments, 'payment' => round($payment)));
  }
}
