<?php

/**
 * @file
 * Contains Drupal\acme\Form\DefaultForm.
 */

namespace Drupal\acme\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormInterface;

/**
 * Class DefaultForm.
 *
 * @package Drupal\acme\Form
 */
class DefaultForm implements FormInterface {

	/* (non-PHPdoc)
	 * @see \Drupal\Core\Form\FormInterface::getFormId()
	 */
	public function getFormId() {
		// TODO: Auto-generated method stub
			return 'my_form_form' ; 
	}

	/* (non-PHPdoc)
	 * @see \Drupal\Core\Form\FormInterface::buildForm()
	 */
	public function buildForm(array $form, FormStateInterface $form_state) {
		// TODO: Auto-generated method stub
		$form['name'] = array(
				'#type' => 'fieldset',
				'#title' => t('Name'),
				'#collapsible' => TRUE,
				'#collapsed' => FALSE,
		);
		$form['name']['first'] = array(
				'#type' => 'textfield',
				'#title' => t('First name'),
				'#required' => TRUE,
				'#default_value' => "First name",
				'#description' => "Please enter your first name.",
				'#size' => 20,
				'#maxlength' => 20,
		);
		$form['name']['last'] = array(
				'#type' => 'textfield',
				'#title' => t('Last name'),
				'#required' => TRUE,
		);
		$form['year_of_birth'] = array(
				'#type' => 'textfield',
				'#title' => "Year of birth",
				'#description' => 'Format is "YYYY"',
		);
		$form['submit'] = array(
				'#type' => 'submit',
				'#value' => 'Submit',
		);
		return $form;
	}

	/* (non-PHPdoc)
	 * @see \Drupal\Core\Form\FormInterface::validateForm()
	 */
	public function validateForm(array &$form, FormStateInterface $form_state) {
		// TODO: Auto-generated method stub

	}

	/* (non-PHPdoc)
	 * @see \Drupal\Core\Form\FormInterface::submitForm()
	 */
	public function submitForm(array &$form, FormStateInterface $form_state) {
		// TODO: Auto-generated method stub

	}

}
