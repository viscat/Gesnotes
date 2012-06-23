<?php 
namespace Gesnotes\AssignaturaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
* @ORM\Entity
*/
class Assignatura{
  
  /** 
   * @ORM\Id 
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;
  
  /** @ORM\Column(type="string", length=100) */
  protected $nom;
  
  /** @ORM\Column(type="string", length=100) */
  protected $slug;
  
  /** @ORM\ManyToOne(targetEntity="Gesnotes\NotaBundle\Entity\Avaluacio", cascade={"persist"}) */
  protected $avaluacio;

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
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    public function setAvaluacio(\Gesnotes\NotaBundle\Entity\Avaluacio $avaluacio)
    {
      $this->avaluacio = $avaluacio;
    }


    public function getAvaluacio()
    {
      return $this->avaluacio;
    }
}