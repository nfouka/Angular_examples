<?php

namespace Drupal\dev\Controller;

class BdContactStorage {

  static function getAll() {
    $result = db_query('SELECT * FROM {bd_contact}')->fetchAllAssoc('id') ; 
    \Drupal::logger('dev')->notice('getAll() : select * bd_contact --> OK');
    return $result;
  }

  static function exists($id) {
    return (bool) $this->get($id);
  }

  static function add($name, $message) {


 
try {
   db_insert('bd_contact')->fields(array(
      'name' => $name,
      'message' => $message,
    ))->execute();
    \Drupal::logger('dev')->notice('---------     your Message'.$message.'  --------------');
    \Drupal::logger('dev')->notice('---------     INSERT N° '.$i.'  --------------');
    \Drupal::logger('dev')->notice('add() : select * bd_contact --> OK');
} catch (DatabaseExceptionWrapper $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
    \Drupal::logger('salut')->error('base de données n existe pas !!');
}

  
}

  static function delete($id) {
    db_delete('bd_contact')->condition('id', $id)->execute();
    \Drupal::logger('dev')->notice('delete($id) : select * bd_contact --> OK');
  }

}
