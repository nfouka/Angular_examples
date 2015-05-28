<?php

namespace App\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
	
       public function angularAction() {
   
           return $this->render('AppBlogBundle:Default:index.html.twig');
     
        } 
    

    public function indexAction()
    {
   
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();    
        $statement = $connection->prepare("SELECT * FROM pays " );
        $statement->execute( );
        $results['records'] = $statement->fetchAll();

    	return new JsonResponse($results) ; 
    }
        //return $this->render('AppBlogBundle:Default:index.html.twig', array('name' => $name));

}
