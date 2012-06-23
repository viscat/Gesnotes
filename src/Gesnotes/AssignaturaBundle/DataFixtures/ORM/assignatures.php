<?php

namespace Gesnotes\AssignaturaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gesnotes\AssignaturaBundle\Entity\Assignatura;
use Gesnotes\NotaBundle\Entity\Avaluacio;


class assignatures extends AbstractFixture implements OrderedFixtureInterface
{
  
  public function getOrder()
  {
    return 2;
  }
  
  
  public function load(ObjectManager $manager)
  {
    $assignatures = array(
      array('nom' => 'Probabilitat i estadística', 'slug' => 'GRAU-PE', 'avaluacio' => '0.5*A + 0.5*B'),
      array('nom' => 'Arquitectura de computadors', 'slug' => 'GRAU-AC', 'avaluacio' => '0.5*A + 0.5*B'),
      array('nom' => 'Interacció i diesseny d\'interfícies', 'slug' => 'GRAU-IDI', 'avaluacio' => '0.5*A + 0.5*B'),
    );
    
    foreach ($assignatures as $assignatura) {
      $entitat = new Assignatura();
      $avaluacio = new Avaluacio();
      $avaluacio->setExpressio($assignatura['avaluacio']);
      $entitat->setNom($assignatura['nom']);
      $entitat->setSlug($assignatura['slug']);
      $entitat->setAvaluacio($avaluacio);
      $manager->persist($entitat);
    }
    $manager->flush();
  }
}
?>