<?php

namespace Lsi\BiblioBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Lsi\BiblioBundle\Entity\User; 

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{   
	    
		$user = new User(); 
        $user->setAge(22); 
        $user->setEmail('admin@yahoo.fr');
        $user->setNomComplet('admin');
        $user->setPassword('admin');
        $user->setRole('admin');
        $user->setUserSuspendu(false); 
        
		$user2 = new User(); 
        $user2->setAge(31); 
        $user2->setEmail('toto@yahoo.fr');
        $user2->setNomComplet('toto');
        $user2->setPassword('toto');
        $user2->setRole('user');
        $user2->setUserSuspendu(false);
        
		$user2 = new User(); 
        $user2->setAge(31); 
        $user2->setEmail('titi@yahoo.fr');
        $user2->setNomComplet('titi');
        $user2->setPassword('titi');
        $user2->setRole('user');
        $user2->setUserSuspendu(true);
        
		$em->persist($user);
		$em->persist($user2);
		$em->flush();
	}
	public function getOrder()
	{
		return 2; // the order in which fixtures will be loaded
	}
}