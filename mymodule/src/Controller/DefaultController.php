<?php

/**
 * @file
 * Contains Drupal\mymodule\Controller\DefaultController.
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\mymodule\Model\Personne;
use Drupal\Core\Form\FormStateInterface;

class DefaultController extends ControllerBase {


	private $form ;

	/**
	 * hello
	 * @param string $name
	 * @return string
	 */
	public function hello($name)
	{
		return [
				'#theme' => 'hello_page',
				'#name' => $name,
		];
	}


	public function somme($n,Request $request)
	{

		$form = \Drupal::formBuilder()->getForm('\Drupal\mymodule\Form\DefaultForm');


		$p1 = new Personne() ; $p1->setFirstName("Kamel")    ; $p1->setLastName("Fouka") ;$p1->setAdress("328 Cité el hassania chlef") ;
		$p2 = new Personne() ; $p2->setFirstName("Mourad")   ; $p2->setLastName("Fouka") ;
		$p3 = new Personne() ; $p3->setFirstName("Nadir")    ; $p3->setLastName("Fouka") ;$p2->setAdress("34 rue du vercors 38000 grenoble") ;

		$collection  = array() ;
		$collection[]  =  $p1 ;
		$collection[]  =  $p2 ;
		$collection[]  =  $p3 ;



		$s = 0 ; $i = 0 ;
		do{
			$s = $s + $i ;
			$i++ ;
		}while( $i<= $n ) ;


			$n = $n * 1000 + 526023 ;

		return [

				'#theme'      => 'somme_page',
				'#somme'      => $s ,
				'#request'    => $request->getBaseUrl() ,
				'#valueIp'    => $request->getClientIp() ,
				'#collection' => $collection ,
				'#form'       => $form ,

		];
	}
	public function getForm() {
		return $this->form;
	}
	public function setForm($form) {
		$this->form = $form;
		return $this;
	}


	public function buildForm(array $form, FormStateInterface $form_state) {
		$config = $this->config('mymodule.default_form_config');
		$form['last_name'] = [
				'#type' => 'textfield',
				'#title' => $this->t('last Name'),
				'#description' => $this->t(''),
				'#default_value' => $config->get('last_name'),
		];
		$form['first_name'] = [
				'#type' => 'textfield',
				'#title' => $this->t('first Name'),
				'#description' => $this->t(''),
				'#default_value' => $config->get('first_name'),
		];
		$form['adress'] = [
				'#type' => 'textarea',
				'#title' => $this->t('adress'),
				'#description' => $this->t(''),
				'#default_value' => $config->get('adress'),
		];
		return $form ;
	}




}


