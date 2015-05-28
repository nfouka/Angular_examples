<?php

namespace Acme\DemoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use dciss\blogBundle\Entity\personne ; 

class GreetCommand extends ContainerAwareCommand 
{
    protected function configure()
    {
        $this
            ->setName('acme:greet')
            ->setDescription('Saluer une personne')
            ->addArgument('name', InputArgument::REQUIRED, 'get all entity')
            ->addArgument('n', InputArgument::REQUIRED, 'N = ')
            ->addArgument('findById', InputArgument::OPTIONAL, 'findById')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'Si définie, la tâche criera en majuscules')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
         
        $entityManager = $this->getContainer()->get('doctrine')->getEntityManager();
        
        for($i=0 ; $i< $input->getArgument('n') ; $i++) {
        $personne = new personne('bia sghira', '186 albert 1er de belgique 69008 Lyon'
                . ''
                . ''
                . 'Entity id :BIA SGHIRA HAS BEEN SAVED I :57
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :58
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :59
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :60
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :61
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :62
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :63
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :64
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :65
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :66
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :67
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :68
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :69
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :70
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :71
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :72
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :73
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :74
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :75
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :76
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :77
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :78
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :79
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :80
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :81
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :82
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :83
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :84
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :85
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :86
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :87
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :88
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :89
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :90
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :91
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :92
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :93
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :94
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :95
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :96
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :97
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :98
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :99
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :57
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :58
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :59
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :60
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :61
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :62
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :63
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :64
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :65
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :66
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :67
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :68
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :69
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :70
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :71
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :72
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :73
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :74
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :75
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :76
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :77
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :78
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :79
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :80
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :81
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :82
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :83
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :84
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :85
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :86
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :87
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :88
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :89
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :90
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :91
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :92
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :93
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :94
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :95
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :96
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :97
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :98
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :99
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :57
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :58
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :59
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :60
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :61
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :62
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :63
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :64
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :65
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :66
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :67
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :68
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :69
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :70
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :71
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :72
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :73
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :74
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :75
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :76
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :77
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :78
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :79
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :80
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :81
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :82
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :83
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :84
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :85
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :86
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :87
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :88
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :89
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :90
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :91
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :92
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :93
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :94
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :95
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :96
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :97
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :98
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :99
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :57
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :58
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :59
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :60
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :61
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :62
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :63
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :64
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :65
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :66
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :67
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :68
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :69
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :70
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :71
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :72
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :73
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :74
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :75
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :76
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :77
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :78
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :79
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :80
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :81
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :82
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :83
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :84
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :85
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :86
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :87
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :88
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :89
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :90
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :91
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :92
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :93
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :94
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :95
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :96
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :97
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :98
                                    Entity id :BIA SGHIRA HAS BEEN SAVED I :99

'
                . ''
                . ''
                . ''
                . ''
                . '') ; 
        $entityManager->persist($personne) ; 
        $entityManager->flush() ; 
      
        $output->writeln('<info>Entity id :BIA SGHIRA HAS BEEN SAVED I :'.$i );
        }
        
    }
}