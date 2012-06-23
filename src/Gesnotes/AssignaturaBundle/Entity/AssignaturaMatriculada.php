<?php 
namespace Gesnotes\AssignaturaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
* @ORM\Entity
*/
class AssignaturaMatriculada{
  
  /** @ORM\Column(type="datetime") */
  protected $data_matricula;
  
  /**
  * @ORM\Id
  * @ORM\ManyToOne(targetEntity="Gesnotes\AssignaturaBundle\Entity\Assignatura")
  */
  protected $assignatura;
  
  /**
  * @ORM\Id
  * @ORM\ManyToOne(targetEntity="Gesnotes\AlumneBundle\Entity\Alumne")
  */
  protected $alumne;
  
  
  public function setDataMatricula($data_matricula)
  {
  $this->data_matricula = $data_matricula;
  }
  
  
  public function getDataMatricula()
  {
  return $this->data_matricula;
  }
  
  
  public function setAssignatura(\Gesnotes\AssignaturaBundle\Entity\Assignatura $assignatura)
  {
    $this->assignatura = $assignatura;
  }
  
  
  public function getAssignatura()
  {
    return $this->assignatura;
  }
  
  public function setAlumne(\Gesnotes\AlumneBundle\Entity\Alumne $alumne)
  {
    $this->alumne = $alumne;
  }
  
  
  public function getAlumne()
  {
    return $this->alumne;
  }


}