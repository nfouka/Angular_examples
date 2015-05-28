<?php

/**
 * @file
 * Contains Drupal\foo\Form\DefaultForm.
 */

namespace Drupal\foo\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class DefaultForm extends ConfigFormBase
{





  /**
  * {@inheritdoc}
  */
  protected function getEditableConfigNames() {
    return [
      'foo.default_form_config'
    ];
  }

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
    $config = $this->config('foo.default_form_config');

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

    $this->config('foo.default_form_config')
    ->save();
  }
}
