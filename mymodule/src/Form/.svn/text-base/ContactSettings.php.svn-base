<?php

/**
 * @file
 * Contains Drupal\mymodule\Form\ContactSettings.
 */

namespace Drupal\mymodule\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ContactSettings extends ConfigFormBase
 {




  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'contact_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('mymodule.contact_settings_config');
    $form['first_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('first Name'),
      '#description' => $this->t(''),
            '#default_value' => $config->get('first_name'),
    ];
    $form['last_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('last Name'),
      '#description' => $this->t(''),
            '#default_value' => $config->get('last_name'),
    ];
    $form['adress_mail'] = [
      '#type' => 'textfield',
      '#title' => $this->t('adress Mail'),
      '#description' => $this->t(''),
            '#default_value' => $config->get('adress_mail'),
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

    $this->config('mymodule.contact_settings_config')
          ->set('first_name', $form_state->getValue('first_name'))
          ->set('last_name', $form_state->getValue('last_name'))
          ->set('adress_mail', $form_state->getValue('adress_mail'))
        ->save();
  }
}
