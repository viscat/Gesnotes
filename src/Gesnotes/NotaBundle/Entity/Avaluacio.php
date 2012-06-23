<?php

namespace Gesnotes\NotaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gesnotes\NotaBundle\Entity\Avaluacio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Avaluacio
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $expressio
     *
     * @ORM\Column(name="expressio", type="string", length=1000)
     */
    private $expressio;


    
    public function __toString() {
      return $this->expressio;
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
     * Set expressio
     *
     * @param string $expressio
     */
    public function setExpressio($expressio)
    {
        $this->expressio = $expressio;
    }

    /**
     * Get expressio
     *
     * @return string 
     */
    public function getExpressio()
    {
        return $this->expressio;
    }
}