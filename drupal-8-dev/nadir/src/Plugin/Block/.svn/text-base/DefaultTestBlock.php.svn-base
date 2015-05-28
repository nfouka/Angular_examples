<?php

/**
 * @file
 * Contains Drupal\nadir\Plugin\Block\DefaultTestBlock.
 */

namespace Drupal\nadir\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\calc\Form\CalcBlockForm;
use Drupal\nadir\Form\InsertDataFormSettings;

/**
 * Provides a 'DefaultTestBlock' block.
 *
 * @Block(
 *  id = "default_test_block",
 *  admin_label = @Translation("default_test_block"),
 * )
 */
class DefaultTestBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['weight'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Weight'),
      '#description' => $this->t('Your Weight'),
      '#default_value' => isset($this->configuration['weight']) ? $this->configuration['weight'] : '',
    );
    $form['height'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Height'),
      '#description' => $this->t('Your Height'),
      '#default_value' => isset($this->configuration['height']) ? $this->configuration['height'] : '',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['weight'] = $form_state->getValue('weight');
    $this->configuration['height'] = $form_state->getValue('height');
    $this->configuration['massbalance'] = $form_state->getValue('massbalance');
    \Drupal::logger('variables sauvergarder avec succées !') ; 
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
  	
    $build = array();
    $build['default_test_block_weight']['#markup'] = '<p>' . $this->configuration['weight'] . '</p>';
    $build['default_test_block_height']['#markup'] = '<p>' . $this->configuration['height'] . '</p>';
    $build['default_test_block_massbalance']['#markup'] = '<p>' . $this->configuration['massbalance'] . '</p>';
    //$form = \Drupal::formBuilder()->getForm('\Drupal\nadir\Form\InsertDataFormSettings');
    //$build['#markup'] =  drupal_render($this->blockForm($form, $form_state)) ;
    //$build['#markup'] = drupal_render(\Drupal::formBuilder()->getForm('\Drupal\nadir\Form\InsertDataFormSettings')) ; 
    return  \Drupal::formBuilder()->getForm('\Drupal\nadir\Form\InsertDataFormSettings') ;  

  }
}
