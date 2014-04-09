<?php

namespace Lsi\BiblioBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Lsi\BiblioBundle\Entity\Livre; 
use Lsi\BiblioBundle\Entity\Collection;

class LoadLivreData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{   
	    $collections=array('Langue-Communication','Droit-Politique','Economique-Finance','Enfant-BD','Litterature-Roman','Philosophie-Religion','Revue-Magasine','Sciences-Technologie');
	    $max=513;
		for($i = 1; $i <= $max; $i++)
			{
			$livre = new Livre(); 
			$livre->setAuteur('test auteur No '.rand(0, 10)); 
            $livre->setCollection($em->merge($this->getReference('collection-'.$collections[rand(0, 7)])));
            $livre->setCouverture('a ('.rand(0, 15).').jpg'); 
			$livre->setSupport('p'.rand(1, 7).'.swf');
           // $livre->setDateAjoutValue();
            $livre->setDateEdition(new \DateTime());
            $livre->setEdition($i.'Nulla nec felis sed leo');
            $livre->setEnLigne(true);
            $livre->setLienAchat($i.'] Sed ut perspiciatis, unde omnis iste natus error sit voluptatem ');
            $livre->setNombreDeVue(rand(0, 199950));
            $livre->setResume($i.'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.');
            $livre->setTitre('livre de test '.rand(0, $max)); 
			$em->persist($livre);
			} 
		$em->flush();
	}
	public function getOrder()
	{
		return 2; // the order in which fixtures will be loaded
	}
}