<?php

/**
 * @file
 * Contains Drupal\acme\Form\generate.
 */

namespace Drupal\acme\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class generate.
 *
 * @package Drupal\acme\Form
 */
class generate extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'acme.generate_config'
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'generate';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('acme.generate_config');
    $form['nom'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('nom'),
      '#description' => $this->t('nom de famille'),
      '#default_value' => $config->get('nom'),
    );
    $form['prenom'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('prenom'),
      '#description' => $this->t('prenom'),
      '#default_value' => $config->get('prenom'),
    );
    $form['adresse'] = array(
      '#type' => 'radios',
      '#title' => $this->t('adresse'),
      '#description' => $this->t('vous etes celebitaire'),
      '#options' => array($this->t('yes') => $this->t('yes')),
      '#default_value' => $config->get('adresse'),
    );
    $form['oui'] = array(
      '#type' => 'radios',
      '#title' => $this->t('oui'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('oui'),
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('acme.generate_config')
      ->set('nom', $form_state->getValue('nom'))
      ->set('prenom', $form_state->getValue('prenom'))
      ->set('adresse', $form_state->getValue('adresse'))
      ->set('oui', $form_state->getValue('oui'))
      ->save();
  }

}
