<?php

namespace Drupal\nadir\Form;

class BdContactStorage {

  static function getAll() {
    $result = db_query('SELECT * FROM {fouka_contact}')->fetchAllAssoc('id');
    return $result;
  }

  static function exists($id) {
    return (bool) $this->get($id);
  }

  static function add($name, $message,$your_job,$d_veloppeur_java_j2ee) {
    db_insert('fouka_contact')->fields(array(
      'your_name' => $name,
      'your_adress' => $message,
      'your_job' => $your_job,
       'd_veloppeur_java_j2ee'=>$d_veloppeur_java_j2ee , 
    ))->execute();
    
    \Drupal::logger('dev')->notice('getAll() : select * bd_contact --> OK');
    
   
  }

  static function delete($id) {
    db_delete('fouka_contact')->condition('id', $id)->execute();
  }

}
