<?php

namespace Lsi\BiblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lsi\BiblioBundle\Utils\Jobeet;

/**
 * Collection
 */
class Collection
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $livre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->livre = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return Collection
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
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
     * Add livre
     *
     * @param \Lsi\BiblioBundle\Entity\Livre $livre
     * @return Collection
     */
    public function addLivre(\Lsi\BiblioBundle\Entity\Livre $livre)
    {
        $this->livre[] = $livre;
    
        return $this;
    }

    /**
     * Remove livre
     *
     * @param \Lsi\BiblioBundle\Entity\Livre $livre
     */
    public function removeLivre(\Lsi\BiblioBundle\Entity\Livre $livre)
    {
        $this->livre->removeElement($livre);
    }

    /**
     * Get livre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLivre()
    {
        return $this->livre;
    }
	
	
	//------------------------------------------
	
	public function __toString()
	{
		return $this->getNom();
	}
	
	private $active_livres;
	private $more_livres;
	
	public function setActiveLivres($livres)
	{
		$this->active_livres = $livres;
	}
	public function getActiveLivres()
	{
		return $this->active_livres;
	}
	public function setMoreLivres($livres)
	{
		$this->more_livres = $livres >= 0 ? $livres : 0;
	}
	public function getMoreLivres()
	{
		return $this->more_livres;
	}
	
    public function getSlug()
    { 
		 return Jobeet::slugify($this->getNom());
    } 
}