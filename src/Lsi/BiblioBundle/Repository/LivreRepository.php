<?php

namespace Lsi\BiblioBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * LivreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LivreRepository extends EntityRepository
{
    
    public function getPopularLivres($id_Collection = null, $max = null, $offset = null)
		{
			$qb = $this->createQueryBuilder('j')
			->where('j.enLigne = :enLigneVal')
			->setParameter('enLigneVal',true)
			->orderBy('j.nombreDeVue', 'DESC');
			if($max)
			{
				$qb->setMaxResults($max);
			}
			if($offset)
			{
				$qb->setFirstResult($offset);
			}
			if($id_Collection)
			{
				$qb->andWhere('j.Collection = :id_Collection')
			       ->setParameter('id_Collection', $id_Collection);
			}
			$query = $qb->getQuery();
			return $query->getResult();
		}
        
    public function getActiveLivres($id_Collection = null, $max = null, $offset = null,$titre=null,$auteur=null)
		{
			$qb = $this->createQueryBuilder('j')
			->where('j.enLigne = :enLigneVal')
			->setParameter('enLigneVal',true)
			->orderBy('j.dateAjout', 'DESC');
			if($max)
			{
				$qb->setMaxResults($max);
			}
			if($offset)
			{
				$qb->setFirstResult($offset);
			}
			if($id_Collection)
			{
				$qb->andWhere('j.Collection = :id_Collection')
			->setParameter('id_Collection', $id_Collection);
			}
	        if($titre)
			{
				$qb->andWhere('j.titre = :titre')
			->setParameter('titre', $titre);
			}
			if($auteur)
			{
				$qb->andWhere('j.auteur = :auteur')
			->setParameter('auteur', $auteur);
			}	
			$query = $qb->getQuery();
			return $query->getResult();
		}
	
	public function countActiveLivres($id_Collection = null,$titre=null,$auteur=null)
	{
		$qb = $this->createQueryBuilder('j')
		->select('count(j.id)') 
		->where('j.enLigne = :enLigneVal')
		->setParameter('enLigneVal',true);
		if($id_Collection)
		{
		$qb->andWhere('j.Collection = :id_Collection')
		->setParameter('id_Collection', $id_Collection);
		}
		if($titre)
		{
			$qb->andWhere('j.titre = :titre')
		->setParameter('titre', $titre);
		}
		if($auteur)
		{
			$qb->andWhere('j.auteur = :auteur')
		->setParameter('auteur', $auteur);
		}
		$query = $qb->getQuery();
		return $query->getSingleScalarResult();
	}
    
    public function auteurLivres()
	{
	   
       /* $qb = $this->createQueryBuilder('j')->
		->where('j.enLigne = :enLigneVal')
		->setParameter('enLigneVal',true)
		->orderBy('j.auteur', 'DESC');
		$query = $qb->getQuery();
		return $query->getResult();
	     $query = $this->_em->createQuery('SELECT DISTINCT auteur  FROM LsiBiblioBundle:Livre auteur');
      return $query->getResult(); */
	}
}