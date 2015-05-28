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

namespace Acme\DemoBundle\command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class cli extends Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand {
    
    protected function configure() {
       
        $this->setName('premier:test')
                ->setDescription('un simple test pour php5 drupal8') ; 
    }
    protected function execute(InputInterface $input, OutputInterface $output) {
       
        $output->print('ok its work ');
    }

    //put your code here
}
