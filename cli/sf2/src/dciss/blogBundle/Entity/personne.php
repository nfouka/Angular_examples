<?php

namespace dciss\blogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * personne
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class personne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="text")
     */
    private $adress;


    function __construct($nom, $adress) {
        $this->nom = $nom;
        $this->adress = $adress;
    }

    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return personne
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }
    
    public function toString(){
        return $this->getNom()." , ".$this->getAdress() ; 
    }
    
}
