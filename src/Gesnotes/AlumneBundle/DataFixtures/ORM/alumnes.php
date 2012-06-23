<?php

namespace Gesnotes\AlumneBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gesnotes\AlumneBundle\Entity\Alumne;


class alumnes extends AbstractFixture implements OrderedFixtureInterface
{
  
  public function getOrder()
  {
    return 1;
  }


  public function load(ObjectManager $manager)
  {
    $alumnes = array(
      array(
          'nom'       => 'Gerard', 
          'cognoms'   => 'Costa Mansilla', 
          'username'  => 'gerard.costa.mansilla',
          'mail'      => 'gerard.costa.mansilla@est.fib.upc.edu',
          'password'  => '',
          'salt'      => '',
          ),
      array(
          'nom'       => 'Ferran', 
          'cognoms'   => 'Alvaro Saperas', 
          'username'  => 'ferran.alvaro',
          'mail'     => 'ferran.alvaro@est.fib.upc.edu',
          'password'  => '',
          'salt'      => '',
          ),
        array(
          'nom'       => 'Marçal', 
          'cognoms'   => 'Solà Velez', 
          'username'  => 'marcal.sola',
          'mail'     => 'marcal.sola@est.fib.upc.edu',
          'password'  => '',
          'salt'      => '',
          ),
    );
    
    foreach ($alumnes as $alumne) {
      $entitat = new Alumne();
      $entitat->setNom($alumne['nom']);
      $entitat->setCognoms($alumne['cognoms']);
      $entitat->setUsername($alumne['username']);
      $entitat->setMail($alumne['mail']);
      $entitat->setPassword($alumne['password']);
      $entitat->setSalt($alumne['salt']);
      $manager->persist($entitat);
    }
    $manager->flush();
  }
}
?>