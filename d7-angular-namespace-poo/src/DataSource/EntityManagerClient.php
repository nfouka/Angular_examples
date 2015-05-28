<?php

namespace Drupal\acme\DataSource;

use Drupal\acme\Model\Client;

class EntityManagerClient  {
	
	
	/* (non-PHPdoc)
	 * @see \Drupal\acme\DataSource\CrudClientInterface::addClient()
	 */
	public static function addClient(Client $client) {
		// TODO: Auto-generated method stub

		db_insert('personne')
		->fields(array(
				'name'   => $client->getName()   ,
				'salary' => $client->getSalary() , 
				'adress' => $client->getAdress() 
					  )
				)
		->execute();
		
	}
	
	
	/* (non-PHPdoc)
	 * @see \Drupal\acme\DataSource\CrudClientInterface::addClient()
	 */
	public static function getClientById($id) {
		// TODO: Auto-generated method stub
	
	$title = db_query("SELECT name,salary FROM {personne} WHERE id = :id", array(':id' => $id))->fetchAssoc() ; 
	$instance =  new Client($title['name'], $title['salary'], '') ; 
	$result  = array() ; 
	$result[]   = array(
			'name' => $instance->getName() , 
			'salary' => $instance->getSalary()
	) ;  
	return drupal_json_output($result) ; 
	  
	}
	
	public static function getAllClientResult() {
		// TODO: Auto-generated method stub
	
		$json = array() ; 
		
		$result = db_select('personne', 'p')->fields('p', array('id','name', 'salary'))
					->execute()
					->fetchAll(\PDO::FETCH_ASSOC);
		
		foreach ($result as $result){
			$json[] = array(
					'id'		=> $result['id'] , 
					'name'		=> $result['name'] , 
					'salary'	=> $result['salary']
			) ; 
		}
		
		return drupal_json_output($json) ; 
	}
	
	public static function getJobCompany(){
		$resultjson = array() ; 
		$result = db_query('
			
				
								SELECT `country`.`id`,
							    `country`.`country`,
							    `country`.`job`,
							    `country`.`company` , 
							    `personne`.`id`,
							    `personne`.`name`,
							    `personne`.`salary`,
							    `personne`.`adress` , 
								`partener`.`partener_group`,
							    `partener`.`siret`,
							    `partener`.`name_partener`
							FROM `d7`.`country`
							LEFT OUTER JOIN `d7`.`personne` 
							ON `personne`.`id` = `country`.`id`
							LEFT OUTER JOIN `d7`.`partener`
							ON `partener`.`name_partener` = `personne`.`name`
				
				
				') ; 
		
		$record = $result->fetchAll(\PDO::FETCH_ASSOC) ; 
		foreach ($record as $record){
			$resultjson['records'][]  = array(
					'name' 		=> $record['name'] ,
					'job'  		=> $record['job']  , 
					'country'	=> $record['country'] , 
					'partener'  => $record['partener_group'] ,
					'siret'     => $record['siret'] , 
					'adress'    => $record['adress']
			) ; 
		}
		
		return drupal_json_output($resultjson) ; 
	}


}