<?php

/**
 * @file
 * Contains Drupal\mymodule\Form\DefaultForm.
 */

namespace Drupal\mymodule\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class DefaultForm extends ConfigFormBase
 {

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'default_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('mymodule.default_form_config');
    $form['last_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('last Name'),
      '#description' => $this->t(''),
            '#default_value' => $config->get('last_name'),
    ];
    $form['first_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('first Name'),
      '#description' => $this->t(''),
            '#default_value' => $config->get('first_name'),
    ];
    $form['adress'] = [
      '#type' => 'textarea',
      '#title' => $this->t('adress'),
      '#description' => $this->t(''),
            '#default_value' => $config->get('adress'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    return parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('mymodule.default_form_config')
          ->set('last_name', $form_state->getValue('last_name'))
          ->set('first_name', $form_state->getValue('first_name'))
          ->set('adress', $form_state->getValue('adress'))
        ->save();
  }
}
