<?php

/**
 * @file
 * Contains Drupal\bmi\Form\SettingsFormBmi.
 */

namespace Drupal\bmi\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class SettingsFormBmi.
 *
 * @package Drupal\bmi\Form
 */
class SettingsFormBmi extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'bmi.settings_form_bmi_config'
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'settings_form_bmi';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('bmi.settings_form_bmi_config');

         $sql = 'SELECT underweight_text, normalweight_text, overweight_text, obesity_text FROM {bmi_settings}';
  $result = db_query($sql);
  $data = array();
  foreach ($result as $weight_text) {
    $data['underweight_text'] = isset($weight_text->underweight_text) ? $weight_text->underweight_text : 'Underweight';
    $data['normalweight_text'] = isset($weight_text->normalweight_text) ? $weight_text->normalweight_text : 'Normal/Healthy';
    $data['overweight_text'] = isset($weight_text->overweight_text) ? $weight_text->overweight_text : 'Overweight';
    $data['obesity_text'] = isset($weight_text->obesity_text) ? $weight_text->obesity_text : 'Obesity';
  }
  
  $form['underweight_text'] = array(
    '#type' => 'textarea',
    '#title' => t('Less than 18.5'),
    '#default_value' => $data['underweight_text'],
    '#rows' => 10,
    '#required' => TRUE,
  );
  $form['normalweight_text'] = array(
    '#type' => 'textarea',
    '#title' => t('18.5 - 24.9'),
    '#default_value' => $data['normalweight_text'],
    '#rows' => 10,
    '#required' => TRUE,
  );
  $form['overweight_text'] = array(
    '#type' => 'textarea',
    '#title' => t('25.0 - 29.9'),
    '#default_value' => $data['overweight_text'],
    '#rows' => 10,
    '#required' => TRUE,
  );
  $form['obesity_text'] = array(
    '#type' => 'textarea',
    '#title' => t('BMI of 30 or greater'),
    '#default_value' => $data['obesity_text'],
    '#rows' => 10,
    '#required' => TRUE,
  );
  //$form['#submit'][] = 'bmi_settings_form_submit';
  //return system_settings_form($form);
    
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
    
  \Drupal::logger('underweight_text :'.$form_state->getValue('underweight_text')) ; 

    $count = db_query('SELECT COUNT(id) FROM {bmi_settings}')->fetchField();
  if ($count > 0) {
   //update
   db_update('bmi_settings')
   ->fields(array(
            'underweight_text' => $form_state->getValue('underweight_text'),
            'normalweight_text' => $form_state->getValue('normalweight_text'),
            'overweight_text' => $form_state->getValue('overweight_text'),
            'obesity_text' => $form_state->getValue('obesity_text'),
   ))
   ->execute();
  } else {
    db_insert('bmi_settings')
    ->fields(array(
         'underweight_text' => $form_state->getValue('underweight_text') ,
         'normalweight_text' => $form_state->getValue('normalweight_text'),
         'overweight_text' => $form_state->getValue('overweight_text'),
         'obesity_text' => $form_state->getValue('obesity_text'),
   ))
   ->execute();
  }
    
  parent::submitForm($form, $form_state);
          

  }

}
