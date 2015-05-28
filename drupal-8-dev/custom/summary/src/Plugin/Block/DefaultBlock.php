<?php

/**
 * @file
 * Contains Drupal\summary\Plugin\Block\DefaultBlock.
 */

namespace Drupal\summary\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("default_block"),
 * )
 */
class DefaultBlock extends BlockBase {





  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('name'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['name']) ? $this->configuration['name'] : '',
    );
    $form['adress'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('adress'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['adress']) ? $this->configuration['adress'] : '',
    );
    $form['price'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('price'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['price']) ? $this->configuration['price'] : '',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['name'] = $form_state->getValue('name');
    $this->configuration['adress'] = $form_state->getValue('adress');
    $this->configuration['price'] = $form_state->getValue('price');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = array();
    $build['default_block_name']['#markup'] = '<p>' . $this->configuration['name'] . '</p>';
    $build['default_block_adress']['#markup'] = '<p>' . $this->configuration['adress'] . '</p>';
    $build['default_block_price']['#markup'] = '<p>' . $this->configuration['price'] . '</p>';

    return $build;
  }
}
