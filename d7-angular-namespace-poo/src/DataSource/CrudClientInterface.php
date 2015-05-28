<?php


namespace Drupal\acme\DataSource;

use Drupal\acme\Model\Client;

class CrudClientInterface {
	
	public static function addClient(Client $client) ; 
	public function removeClient(Client $client) ; 
	public function modifiyClient(Client $client) ; 
	public function getClientById($id) ; 
	public function getAllClient() ; 
	
}