<?php

/**
 * @file
 * Contains Drupal\nadir\Form\InsertDataFormSettings.
 */

namespace Drupal\nadir\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class InsertDataFormSettings extends ConfigFormBase
{


  /**
  * {@inheritdoc}
  */
  protected function getEditableConfigNames() {
    return [
      'nadir.insert_data_form_settings_config'
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'insert_data_form_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {


    $page['#attached']['js'][] = drupal_get_path('theme', 'bartik') . '/js/js.js';
    $page['#attached']['css'][] = drupal_get_path('theme', 'bartik') . '/css/css.css';

  //drupal_add_js(drupal_get_path('module', 'calc') . '/js/calc.js');

    $config = $this->config('nadir.insert_data_form_settings_config');
    $form['your_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Your Name'),
      '#description' => $this->t('Votre Nom'),
      '#default_value' => $config->get('your_name'),
    );
    $form['your_adress'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Your Adress'),
      '#description' => $this->t('Votre adresse postale'),
      '#default_value' => $config->get('your_adress'),
    );
    $form['your_job'] = array(
      '#type' => 'select',
      '#title' => $this->t('Your Job'),
      '#description' => $this->t('Dév PHP5 DRUPAL'),
      '#options' => array(
        'php5'=>'PHP5 DRUPAL6' , 
        'php6'=>'PHP5 DRUPAL7' , 
        'CMF'=>' WordPress PHP5 DRUPAL8' , 
        'php55'=>'Java /J2EE' , 
        ),
      '#default_value' => $config->get('your_job'),
    );
    $form['d_veloppeur_java_j2ee'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Développeur Java/J2EE'),
      '#description' => $this->t('Java J2EE'),
      '#default_value' => $config->get('d_veloppeur_java_j2ee'),
    );
    $form['d_veloppeur_html5_javascript_jquer'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Développeur HTML5 JavaScript jQuer'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('d_veloppeur_html5_javascript_jquer'),
    );

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
    '#prefix' => '<div id="nadir_calculate_wrapper" style="font-size:35px;color:red;">',
    '#suffix' => '</div>',
    '#markup' => '',
  );
  $form['my_submit'] = array(
    '#type' => 'submit',
     '#ajax' => array(
        'callback' =>  '::bmi_calculate',
        'wrapper' => 'nadir_calculate_wrapper',
        'progress' => array(
          'type' => 'throbber',
          'message' => "searching",
        ),
      ),
    '#value' => t('Send Request Ajax'),
  );

    return parent::buildForm($form, $form_state);
    
  }



public function addMoreSubmit(array &$form, array &$form_state) {
    //$form_state['fields']['mymodule']['foo']['items_count']++;
    $form_state['rebuild'] = TRUE;
  }
  public function addMoreCallback(array &$form, array &$form_state) {
    return 'SALUT ITS WORK';
  }



  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

function updateDestinationIds($form, FormStateInterface $form_state) {
    //$form ['source']['migration_ids']['#options'] = $this->getDestinationIds($form_state->getValue('version'));
    return '<h1>Its Work in Drupal 8</h1>' ; 
}
  public function bmi_calculate(array &$form, FormStateInterface $form_state) {

  $output = "<h1>
  All Variables  : 
  </h1>";

    $element['#attached']['js'][] = drupal_get_path('theme', 'bartik') . '/js/js.js';
    $element['#attached']['css'][] = drupal_get_path('theme', 'bartik') . '/css/css.css';

  $body_weight = $form_state->getValue('body_weight');
  $body_height = $form_state->getValue('body_height');
  $weight_unit = $form_state->getValue('weight_units');
  $height_unit = $form_state->getValue('height_units');

  $output .= $form_state->getValue('your_name') ; 
  $output .= $form_state->getValue('your_adress') ; 
  $output .= $form_state->getValue('your_job') ; 
  $output .= $form_state->getValue('d_veloppeur_java_j2ee') ; 
  $output .= $form_state->getValue('d_veloppeur_html5_javascript_jquer') ; 


  BdContactStorage::add(
          $form_state->getValue('your_name'), 
          $form_state->getValue('your_adress'),
          $form_state->getValue('your_job'),
          $form_state->getValue('d_veloppeur_java_j2ee')
          ) ; 
  
  $result = 0;
  for($i=0 ; $i<1000 ; $i++){
      $result = $result + $i*120 / 826 + $i ; 
  }
  
if ((is_numeric($body_weight)) && (is_numeric($body_height))) {
    $body_weight = InsertDataFormSettings::convert_weight_kgs($body_weight, $weight_unit);
    $body_height = InsertDataFormSettings::convert_height_mts($body_height, $height_unit);

    $bmi = 1.3*$body_weight/pow($body_height,2.5);
    $bmi = round($bmi, 2);
    $bmi_std = $body_weight/($body_height*$body_height);
    $bmi_std = round($bmi_std, 2);
    $bmi_text = InsertDataFormSettings::get_bmi_text($bmi);
    $output = t("Your BMI value according to the Quetelet formula is");
    $output .= " <b>". $bmi_std ."</b><br>";
    $output .= t("Your adjusted BMI value according to Nick Trefethen of 
    <a href='http://www.ox.ac.uk/media/science_blog/130116.html' target='_blank'>Oxford University's Mathematical Institute</a> is");
    $output .= " <b>". $bmi ."</b><br>". $bmi_text;
  }
  else {
    $output = "Please enter numeric values for weight and height fields";
  }
  $element = $form['bmi_result'];
  $element['#markup'] = $output;
  return $element;

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {


   // parent::submitForm($form, $form_state);

    
    $this->config('nadir.insert_data_form_settings_config')
      ->set('your_name', $form_state->getValue('your_name'))
      ->set('your_adress', $form_state->getValue('your_adress'))
      ->set('your_job', $form_state->getValue('your_job'))
      ->set('d_veloppeur_java_j2ee', $form_state->getValue('d_veloppeur_java_j2ee'))
      ->set('d_veloppeur_html5_javascript_jquer', $form_state->getValue('d_veloppeur_html5_javascript_jquer'))
    ->save();
    
    
  }


public static function convert_weight_kgs($body_weight = NULL, $weight_unit = NULL) {
  if ($weight_unit == 'lbs') {
  // 1pound = 0.4359237
    return $body_weight * 0.4536;
  }
  // return the weight as is bcoz it is in kg only
    return $body_weight;
}

public static function convert_height_mts($body_height = NULL, $height_unit = NULL) {
  switch ($height_unit) {
    case 'mts':
      return $body_height;
      break;
    case 'cms':
    // 1 cms = 0.01 m.    
      return $body_height * 0.01;
  }
}

public static function get_bmi_text($bmi = NULL) {
  if ($bmi <= 18.5)
    $column = 'underweight_text';
  elseif ($bmi > 18.5 && $bmi <= 24.9)
    $column = 'normalweight_text';
  elseif ($bmi >24.9 && $bmi <= 29.9)
    $column = 'overweight_text';
  elseif ($bmi > 29.9)
    $column = 'obesity_text';
  $sql = 'SELECT '. $column .' FROM {bmi_settings}';
  $result = db_query($sql);
  foreach ($result as $weight_text) {
    return $weight_text->$column;
  }
    return NULL;
}


}