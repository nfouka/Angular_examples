<?php

/**
 * @file
 * Contains Drupal\first\Plugin\Block\CalculetteBlock.
 */

namespace Drupal\first\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'CalculetteBlock' block.
 *
 * @Block(
 *  id = "calculette_block",
 *  admin_label = @Translation("calculette_block"),
 * )
 */
class CalculetteBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['nom'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('nom'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['nom']) ? $this->configuration['nom'] : '',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['nom'] = $form_state->getValue('nom');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = array();
    $build['calculette_block_nom']['#markup'] = 
            
            render(\Drupal::formBuilder()->getForm('\Drupal\first\Form\calculatorForm')).
            '<button id="valider" onclick="nadir()">Valider Calcul</button>'.''
            . '<div id="res"></div>' ; 

    return $build;
  }

}
