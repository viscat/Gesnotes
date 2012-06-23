<?php

namespace Gesnotes\AssignaturaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gesnotes\AssignaturaBundle\Entity\Assignatura;
use Gesnotes\AssignaturaBundle\Entity\AssignaturaMatriculada;
use Gesnotes\NotaBundle\Entity\Nota;


class assignatures_matriculades extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
  
  private $container;
  
  
  public function getOrder()
  {
    return 3;
  }
  
  
  

  public function setContainer(ContainerInterface $container = null)
  {
      $this->container = $container;
  }
  
  public function load(ObjectManager $manager)
  {
    $assignatures_matriculades = array(
      array('assignatura_id' => '1', 'alumne_id' => '1'),
      array('assignatura_id' => '1', 'alumne_id' => '2'),
      array('assignatura_id' => '1', 'alumne_id' => '3'),
      array('assignatura_id' => '2', 'alumne_id' => '2'),
      array('assignatura_id' => '2', 'alumne_id' => '3'),
      array('assignatura_id' => '3', 'alumne_id' => '1'),
    );
    foreach ($assignatures_matriculades as $assignatura_matriculada) {
      $assignatura = $manager->getRepository("AssignaturaBundle:Assignatura")->findOneBy(array("id" => $assignatura_matriculada['assignatura_id']));
      $alumne = $manager->getRepository("AlumneBundle:Alumne")->findOneBy(array("id" => $assignatura_matriculada['alumne_id']));
      $a = $manager->getRepository("AlumneBundle:Alumne")->findAll();
      $entitat = new AssignaturaMatriculada();
      $entitat->setAlumne($alumne);
      $entitat->setAssignatura($assignatura);
      $entitat->setDataMatricula(data('Y-m-d'));
      $manager->persist($entitat);
    }
    $manager->flush();
  }
}
?>