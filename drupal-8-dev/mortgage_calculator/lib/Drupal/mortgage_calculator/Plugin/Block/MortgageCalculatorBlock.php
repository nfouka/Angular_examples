<?php

/**
 * @file
 * Contains \Drupal\mortgage_calculator\Plugin\Block\MortgageCalculatorBlock.
 */

namespace Drupal\mortgage_calculator\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;
use Drupal\mortgage_calculator\Form\MortgageCalculatorForm;

/**
 * Provides a 'Example: uppercase this please' block.
 *
 * @Block(
 *  id = "mortgage_calculator_block",
 *  admin_label = @Translation("Mortgage Calculator"),
 *  module = "mortgage_calculator"
 * )
 */
class MortgageCalculatorBlock extends BlockBase {

  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {

    $form_id  = drupal_get_form(new MortgageCalculatorForm());

    return array(
      '#children' => drupal_render($form_id),
    );
  }

}
