<?php

/**
 * @file
 * Contains Drupal\nadir\Plugin\Block\nadirBlock.
 */

namespace Drupal\nadir\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormBuilder;
use Drupal\Core\Form\FormValidator;
use Drupal\Core\Form\FormSubmitter;

/**
 * Provides a 'nadirBlock' block.
 *
 * @Block(
 *  id = "nadir_block",
 *  admin_label = @Translation("nadir_block"),
 * )
 */
class nadirBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * Drupal\Core\Form\FormBuilder definition.
   *
   * @var Drupal\Core\Form\FormBuilder
   */
  protected $form_builder;

  /**
   * Drupal\Core\Form\FormValidator definition.
   *
   * @var Drupal\Core\Form\FormValidator
   */
  protected $form_validator;

  /**
   * Drupal\Core\Form\FormSubmitter definition.
   *
   * @var Drupal\Core\Form\FormSubmitter
   */
  protected $form_submitter;


  /**
   * Construct.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param string $plugin_definition
   *   The plugin implementation definition.
   */
  public function __construct(
        array $configuration,
        $plugin_id,
        $plugin_definition,
        FormBuilder $form_builder, 
	FormValidator $form_validator, 
	FormSubmitter $form_submitter
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->form_builder = $form_builder;
    $this->form_validator = $form_validator;
    $this->form_submitter = $form_submitter;
  }


  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('form_builder'),
      $container->get('form_validator'),
      $container->get('form_submitter')
    );
  }



  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
  	$form['body_weight'] = array(
  			'#type' => 'textfield',
  			'#title' => t('Weight'),
  			'#size' => 10,
  			'#required' => TRUE,
  			'#prefix' => '<div style="float:left;">',
  			'#suffix' => '</div>',
  	);
  	$weight_units = array("kgs" => "kgs", "lbs" => "lbs");
  	$height_units = array("cms" => "cms", "mts" => "mts");
  	$form['weight_units'] = array(
  			'#type' => 'select',
  			'#title' => 'Units',
  			'#required' => TRUE,
  			'#options' => $weight_units,
  			'#prefix' => '<div style="float:left;">',
  			'#suffix' => '</div><div style="clear:both;"></div>',
  	);
  	$form['body_height'] = array(
  			'#type' => 'textfield',
  			'#title' => t('Height'),
  			'#size' => 10,
  			'#required' => TRUE,
  			'#prefix' => '<div style="float:left;">',
  			'#suffix' => '</div>',
  	);
  	$form['height_units'] = array(
  			'#type' => 'select',
  			'#title' => t('Units'),
  			'#required' => TRUE,
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
  
  function bmi_calculate($form, $form_state) {
  	$body_weight = $form_state['values']['body_weight'];
  	$body_height = $form_state['values']['body_height'];
  	$weight_unit = $form_state['values']['weight_units'];
  	$height_unit = $form_state['values']['height_units'];
  
  	if ((is_numeric($body_weight)) && (is_numeric($body_height))) {
  		$body_weight = convert_weight_kgs($body_weight, $weight_unit);
  		$body_height = convert_height_mts($body_height, $height_unit);
  		$bmi = 1.3*$body_weight/pow($body_height,2.5);
  		$bmi = round($bmi, 2);
  		$bmi_std = $body_weight/($body_height*$body_height);
  		$bmi_std = round($bmi_std, 2);
  		$bmi_text = get_bmi_text($bmi);
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
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['name'] = $form_state->getValue('name');
    $this->configuration['adress'] = $form_state->getValue('adress');
    $body_weight = $form_state['values']['body_weight'];
    $body_height = $form_state['values']['body_height'];
    $weight_unit = $form_state['values']['weight_units'];
    $height_unit = $form_state['values']['height_units'];
    
    if ((is_numeric($body_weight)) && (is_numeric($body_height))) {
    	$body_weight = convert_weight_kgs($body_weight, $weight_unit);
    	$body_height = convert_height_mts($body_height, $height_unit);
    	$bmi = 1.3*$body_weight/pow($body_height,2.5);
    	$bmi = round($bmi, 2);
    	$bmi_std = $body_weight/($body_height*$body_height);
    	$bmi_std = round($bmi_std, 2);
    	$bmi_text = get_bmi_text($bmi);
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
  public function build() {
    //return drupal_get_form(new InsertDataFormSettings($config_factory), $this->request); 
  	//
  	return  \Drupal::formBuilder()->getForm('\Drupal\nadir\Form\InsertDataFormSettings') ;
  	

  	
  }
  
  function convert_weight_kgs($body_weight = NULL, $weight_unit = NULL) {
  	if ($weight_unit == 'lbs') {
  		// 1pound = 0.4359237
  		return $body_weight * 0.4536;
  	}
  	// return the weight as is bcoz it is in kg only
  	return $body_weight;
  }
  
  function convert_height_mts($body_height = NULL, $height_unit = NULL) {
  	switch ($height_unit) {
  		case 'mts':
  			return $body_height;
  			break;
  		case 'cms':
  			// 1 cms = 0.01 m.
  			return $body_height * 0.01;
  	}
  }
  
  function get_bmi_text($bmi = NULL) {
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
