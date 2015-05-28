<?php

/**
 * @file
 * Contains Drupal\dev\Form\DeveloperSettingsForm.
 */

namespace Drupal\dev\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url ; 

class DeveloperSettingsForm extends ConfigFormBase
{

  /**
  * {@inheritdoc}
  */
  protected function getEditableConfigNames() {
    return [
      'dev.developer_settings_form_config'
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'developer_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('bmi.admin_settings');
    $form['nom'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Nom'),
      '#description' => $this->t('Tapez votre nom'),
      '#default_value' => $config->get('nom'),
    );
    $form['message'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Message'),
      '#description' => $this->t('Tapez votre message'),
      '#default_value' => $config->get('message'),
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

    $this->config('dev.developer_settings_form_config')
      ->set('nom', $form_state->getValue('nom'))
      ->set('message', $form_state->getValue('message'))
    ->save();
    
    //$name = $form_state['values']['nom']; 
    //$message = $form_state['values']['message']; 
    
    //\Drupal\bd_contact\BdContactStorage::add(check_plain($name), check_plain($message)); 
   
    //\Drupal\dev\Controller\BdContactStorage::add(getValue('nom'), getValue('nom') ) ; 
    //watchdog('bd_contact', 'BD Contact message from %name has been submitted.', array('%name' => $name)); 
    drupal_set_message(t('Your message has been submitted name is '.$form_state->getValue('message'))); 
    
    /*
    db_insert('bd_contact')->fields(array(
      'name' => $form_state->getValue('nom') ,
      'message' => $form_state->getValue('message'),
    ))->execute();
    */


   \Drupal\dev\Controller\BdContactStorage::add($form_state->getValue('nom'), $form_state->getValue('message')) ; 
  
   //return  new \Symfony\Component\HttpFoundation\RedirectResponse(\Drupal::url('http://localhost/drupal-8.0.0-beta6/index.php/dev/hello/fouka')) ; 

        return;
   
  }
}