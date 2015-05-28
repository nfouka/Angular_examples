<?php

/**
 * @file
 * Contains \Drupal\mortgage_calculator\Plugin\Block\MortgageCalculatorJSBlock.
 */

namespace Drupal\mortgage_calculator\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;
use Drupal\mortgage_calculator\Form\MortgageCalculatorJSForm;

/**
 * Provides a 'Example: uppercase this please' block.
 *
 * @Block(
 *  id = "mortgage_calculator_js_block",
 *  admin_label = @Translation("Mortgage Calculator JS"),
 *  module = "mortgage_calculator"
 * )
 */
class MortgageCalculatorJSBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
//    $form_id = drupal_get_form('mortgage_calculator_js_form');
    $form_id = drupal_get_form(new MortgageCalculatorJSForm());
    return array(
      '#children' => drupal_render($form_id),
    );
  }

}
