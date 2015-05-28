<?php

/**
 * @file
 * Contains Drupal\first\Form\DefaultForm.
 */

namespace Drupal\first\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Class DefaultForm.
 *
 * @package Drupal\first\Form
 */
class DefaultForm implements \Drupal\Core\Form\FormInterface {

     /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'calculator_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

        $form['body_weight'] = array(
    '#type' => 'textfield',
    '#title' => t('Weight'),
    '#size' => 10,
    '#required' => FALSE,
    '#prefix' => '<div style="float:left;">',
    '#suffix' => '</div>',
    );
  $weight_units = array("kgs" => "kgs", "lbs" => "lbs");
  $height_units = array("cms" => "cms", "mts" => "mts");
  $form['weight_units'] = array(
    '#type' => 'select',
    '#title' => 'Units',
    '#required' => FALSE,
    '#options' => $weight_units,
    '#prefix' => '<div style="float:left;">',
    '#suffix' => '</div><div style="clear:both;"></div>',
    );
  $form['body_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Height'),
    '#size' => 10,
    '#required' => FALSE,
    '#prefix' => '<div style="float:left;">',
    '#suffix' => '</div>',
    );
  $form['height_units'] = array(
    '#type' => 'select',
    '#title' => t('Units'),
    '#required' => FALSE,
    '#options' => $height_units,
    '#prefix' => '<div style="float:left;">',
    '#suffix' => '</div><div style="clear:both;"></div>',
    );
  $form['bmi_result'] = array(
    '#type' => 'markup',
    '#prefix' => '<div id="bmi_calculate_wrapper">',
    '#suffix' => '</div>',
    '#markup' => '',
  );
  $form['my_submit'] = array(
    '#type' => 'submit',
    '#ajax' => array(
      'callback' => '::bmi_calculate',
      'wrapper' => 'bmi_calculate_wrapper',
      'name' => 'submit1',
    ),
    '#value' => t('Calculate'),
  );
  return $form;
      
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
   
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    //parent::submitForm($form, $form_state);
    //drupal_set_message(' message OK') ; 
  }
  
  public static function calcul($x1=NULL,$x2=NULL,$x3=NULL,$x4=NULL){
      return $x1 + $x2 + 25*$x3 / $x4 + cos($x1+$x2+x3); 
  }
  
  public static function bmi_calculate($form, $form_state) {
        
  $x1 = $form_state->getValue('body_weight');
  $x2 = $form_state->getValue('body_height');
  $x3 = $form_state->getValue('weight_units');
  $x4 = $form_state->getValue('height_units'); 
  
     $prfix  = 'L’<a href="/wiki/Organisation_mondiale_de_la_sant%C3%A9" title="Organisation mondiale de la santé">Organisation mondiale de la santé</a> a défini en <a href="/wiki/1997" title="1997">1997</a> cet indice de <a href="/wiki/Masse_corporelle" title="Masse corporelle" class="mw-redirect">masse corporelle</a> comme le standard pour évaluer les risques liés au surpoids chez l’adulte. Il a également défini des intervalles standards (maigreur, indice normal, surpoids, obésité) en se basant sur la relation constatée statistiquement entre l’IMC et le taux de mortalité' ; 
      
     $element = $form['bmi_result'];
     $element['#markup'] = $prfix.' <strong>BMI Value is :</strong>'.self::calcul($x1, $x2, $x3, $x4);
      
     return $element;
  }
  
}