<?php
use Drupal\Core\Form\FormBuilderInterface;

class DefaultForm implements FormBuilderInterface{


public function getFormId(\Drupal\Core\Form\FormInterface|string $form_arg,FormStateInterface $form_state){ 
// TODO Auto-generated method stub 
}


public function prepareForm(string $form_id,array $form,FormStateInterface $form_state){ 
// TODO Auto-generated method stub 
}


public function retrieveForm(string $form_id,FormStateInterface $form_state){ 
// TODO Auto-generated method stub 
}


public function rebuildForm(string $form_id,FormStateInterface $form_state,array|null $old_form=NULL){ 
// TODO Auto-generated method stub 
}


public function doBuildForm(string $form_id,array $element,FormStateInterface $form_state){ 
// TODO Auto-generated method stub 
}


public function getForm(\Drupal\Core\Form\FormInterface|string $form_arg){ 
// TODO Auto-generated method stub 
}


public function buildForm(\Drupal\Core\Form\FormInterface|string $form_id,FormStateInterface $form_state){ 
// TODO Auto-generated method stub 
}


public function submitForm(\Drupal\Core\Form\FormInterface|string $form_arg,FormStateInterface $form_state){ 
// TODO Auto-generated method stub 
}


public function processForm(string $form_id,array $form,FormStateInterface $form_state){ 
// TODO Auto-generated method stub 
}

}