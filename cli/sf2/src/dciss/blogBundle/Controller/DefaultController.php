<?php

namespace dciss\blogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $antispam = $this->container->get('oc_platform.antispam')  ; 
               

        $result  = $antispam->isSpam($name) ; 
        
            if ( $result == 'Un Spam') {
              throw new \Exception('Votre message a été détecté comme spam !');
            } 
        
            $event = new \Symfony\Component\EventDispatcher\Event() ; 
        
        /*
        $message = \Swift_Message::newInstance()
                
                    ->setSubject('Hello Email')
                    ->setFrom('nadir.fouka@gmail.com')
                    ->setTo('nadir.fouka@gmail.com')
                    ->setBody('Salut tout le monde , un simple depuis Swift_Mailer library .') ;
        
        $this->get('mailer')->send($message);
         * 
         */
        
        return $this->render('dcissblogBundle:Default:index.html.twig', array('name' => $name ));
        
    }
}
