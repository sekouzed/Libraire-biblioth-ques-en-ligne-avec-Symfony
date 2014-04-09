<?php

namespace Lsi\BiblioBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Lsi\BiblioBundle\Entity\Collection;

class LoadCollectionData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$Collection = new Collection(); 
        $Collection->setNom('Langue-Communication');
		$Collection1 = new Collection(); 
        $Collection1->setNom('Droit-Politique');
		$Collection2 = new Collection(); 
        $Collection2->setNom('Economique-Finance');
		$Collection3 = new Collection(); 
        $Collection3->setNom('Enfant-BD');
		$Collection4 = new Collection(); 
        $Collection4->setNom('Litterature-Roman');
		$Collection5 = new Collection(); 
        $Collection5->setNom('Philosophie-Religion');
		$Collection6 = new Collection(); 
        $Collection6->setNom('Revue-Magasine');
		$Collection7 = new Collection(); 
        $Collection7->setNom('Sciences-Technologie'); 
		$em->persist($Collection); 
		$em->persist($Collection1);
		$em->persist($Collection2); 
		$em->persist($Collection3); 
		$em->persist($Collection4); 
		$em->persist($Collection5); 
		$em->persist($Collection6); 
		$em->persist($Collection7);
		$em->flush();
		$this->addReference('collection-Langue-Communication',$Collection);
        $this->addReference('collection-Droit-Politique',$Collection1);
        $this->addReference('collection-Economique-Finance',$Collection2);
        $this->addReference('collection-Enfant-BD',$Collection3);
        $this->addReference('collection-Litterature-Roman',$Collection4);
        $this->addReference('collection-Philosophie-Religion',$Collection5);
        $this->addReference('collection-Revue-Magasine',$Collection6);
        $this->addReference('collection-Sciences-Technologie',$Collection7);
	}
	public function getOrder()
	{
		return 1; // the order in which fixtures will be loaded
	}
}