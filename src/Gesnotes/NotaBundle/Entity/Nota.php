<?php

namespace Gesnotes\NotaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gesnotes\NotaBundle\Entity\Nota
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Nota
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
     * @var string $etiqueta
     *
     * @ORM\Column(name="etiqueta", type="string", length=255)
     */
    private $etiqueta;

    /**
     * @var integer $nota
     *
     * @ORM\Column(name="nota", type="integer")
     */
    private $nota;
    
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Gesnotes\AlumneBundle\Entity\Alumne", inversedBy="notes")
     */
    private $assignatura_matriculada;


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
     * Set etiqueta
     *
     * @param string $etiqueta
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;
    }

    /**
     * Get etiqueta
     *
     * @return string 
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    /**
     * Set nota
     *
     * @param integer $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    /**
     * Get nota
     *
     * @return integer 
     */
    public function getNota()
    {
        return $this->nota;
    }
    
    public function setAssignaturaMatricula(\Gesnotes\AssignaturaBundle\Entity\AssignaturaMatriculada $assignatura_matriculada)
    {
      $this->assignatura_matriculada = $assignatura_matriculada;
    }


    public function getAssignaturaMatriculada()
    {
      return $this->assignatura_matriculada;
    }
}