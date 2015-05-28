<?php

/**
 * @file
 * Contains Drupal\calculator\Form\CalculateExampleSettings.
 */

namespace Drupal\calculator\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class CalculateExampleSettings extends ConfigFormBase
{


  /**
  * {@inheritdoc}
  */
  protected function getEditableConfigNames() {
    return [
      'calculator.calculate_example_settings_config'
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'calculate_example_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $element['#attached']['library'][] = 'calculator/jquery.masonry';


//drupal_add_js(drupal_get_path('module', 'calculator') . '/calculator.js');

    $config = $this->config('calculator.calculate_example_settings_config');
    $form['valeur'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('valeur'),
      '#description' => $this->t('tapez votre valeur ici / ou afficher le résultat'),
      '#default_value' => $config->get('valeur'),
    );

  $path = drupal_get_path('module', 'calculator');
  $element['#attached']['js'][$path . '/js/calculator.js'] = array('every_page' => TRUE);
  $page['#attached']['library'][] = 'calculator/calculator-corescripts';

      $form['Enter'] = [
     '#type' => 'button',
      '#value' => 'E N T E R',
      '#title' => t('ENTER'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'enter',
      ),
      '#default_value' => 'enter',
      '#prefix' => '<div>loading ...</div>',

    ];




  $example = array(

  '#attached' => array(
    'js' => array(
      drupal_get_path('module', 'calculator') . '/js/calculator.js' => array(),
    ),
  )

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

    $this->config('calculator.calculate_example_settings_config')
      ->set('valeur', $form_state->getValue('valeur'))
    ->save();
  }
}
