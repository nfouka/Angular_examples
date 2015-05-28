<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cli
 *
 * @author nadir
 */

namespace Acme\DemoBundle\Command;

class cli extends Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand {
    
    protected function configure() {
        parent::configure();
        $this->setName('premier:test')
                ->setDescription('un simple test pour php5 drupal8') ; 
    }
    protected function execute(InputInterface $input, OutputInterface $output) {
        parent::execute($input, $output);
        $output->print('ok its work ');
    }

    //put your code here
}
