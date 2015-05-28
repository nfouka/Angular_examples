<?php

/**
 * @file
 * Contains Drupal\first\Form\CalculatriceUIForm.
 */

namespace Drupal\first\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CalculatriceUIForm.
 *
 * @package Drupal\first\Form
 */
class CalculatriceUIForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return 'first.calculatrice_u_i_form_config'; 
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'calculatrice_u_i_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('first.calculatrice_u_i_form_config');
    $form = array();
    $form['calc_result'] = array(
    '#type' => 'textfield',
    '#value' => 0,
    '#size' => 16,
  );

    // <input type="button" class="calc_btn" value="7" onclick="javascript:add_calc('calc',7);" />

  $form['calc_b1'] = array(
    '#markup' => '<input type="button" name="b-1" value="1" onclick="calc(\'1\')" />',
  );
  $form['calc_b2'] = array(
    '#markup' => '<input type="button" name="b-2" value="2" onclick="calc(\'2\')" />',
  );
  $form['calc_b3'] = array(
    '#markup' => '<input type="button" name="b-3" value="3" onclick="calc(\'3\')" />',
  );
  $form['calc_b4'] = array(
    '#markup' => '<input type="button" name="b-4" value="4" onclick="calc(\'4\')" />',
  );
  $form['calc_b5'] = array(
    '#markup' => '<input type="button" name="b-5" value="5" onclick="calc(\'5\')" />',
  );
  $form['calc_b6'] = array(
    '#markup' => '<input type="button" name="b-6" value="6" onclick="calc(\'6\')" />',
  );
  $form['calc_b7'] = array(
    '#markup' => '<input type="button" name="b-7" value="7" onclick="calc(\'7\')" />',
  );
  $form['calc_b8'] = array(
    '#markup' => '<input type="button" name="b-8" value="8" onclick="calc(\'8\')" />',
  );
  $form['calc_b9'] = array(
    '#markup' => '<input type="button" name="b-9" value="9" onclick="calc(\'9\')" />',
  );
  $form['calc_b0'] = array(
    '#markup' => '<input type="button" name="b-0" value="0" onclick="calc(\'0\')" />',
  );
  $form['calc_pls'] = array(
    '#markup' => '<input type="button" name="b-pls" value="+" onclick="calc(\'+\')" />',
  );
  $form['calc_min'] = array(
    '#markup' => '<input type="button" name="b-min" value="-" onclick="calc(\'-\')" />',
  );
  $form['calc_div'] = array(
    '#markup' => '<input type="button" name="b-div" value="/" onclick="calc(\'/\')" />',
  );
  $form['calc_mul'] = array(
    '#markup' => '<input type="button" name="b-mul" value="*" onclick="calc(\'*\')" />',
  );
  $form['calc_sgn'] = array(
    '#markup' => '<input type="button" name="b-sgn" value="+/-" onclick="calc(\'+/-\')" />',
  );
  $form['calc_prc'] = array(
    '#markup' => '<input type="button" name="b-prc" value="%" onclick="calc(\'%\')" />',
  );
  $form['calc_pnt'] = array(
    '#markup' => '<input type="button" name="b-pnt" value="." onclick="calc(\'.\')" />',
  );
  $form['calc_rep'] = array(
    '#markup' => '<input type="button" name="b-rep" value="1/x" onclick="calc(\'1/x\')" />',
  );
  $form['calc_clr'] = array(
    '#markup' => '<input type="button" name="b-C" value="C" onclick="calc(\'C\')" />',
  );
  $form['calc_eql'] = array(
    '#markup' => '<input type="button" name="b-eql" value="=" onclick="calc(\'=\')" />',
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

    $this->config('first.calculatrice_u_i_form_config')
      ->set('1', $form_state->getValue('1'))
      ->save();
  }

}
