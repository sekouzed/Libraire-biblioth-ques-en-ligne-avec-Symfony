<?php

namespace Lsi\BiblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lsi\BiblioBundle\Utils\Jobeet as Jobeet;

/**
 * Livre
 */
class Livre
{
    
	public $file;
	public $file2;
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $couverture;

    /**
     * @var string
     */
    private $resume;

    /**
     * @var string
     */
    private $auteur;

    /**
     * @var string
     */
    private $edition;

    /**
     * @var \DateTime
     */
    private $dateEdition;

    /**
     * @var string
     */
    private $lienAchat;

    /**
     * @var integer
     */
    private $nombreDeVue;

    /**
     * @var boolean
     */
    private $enLigne;

    /**
     * @var \DateTime
     */
    private $dateAjout;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $avis_user_livre;

    /**
     * @var \Lsi\BiblioBundle\Entity\Collection
     */
    private $Collection;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->avis_user_livre = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titre
     *
     * @param string $titre
     * @return Livre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set couverture
     *
     * @param string $couverture
     * @return Livre
     */
    public function setCouverture($couverture)
    {
        $this->couverture = $couverture;
    
        return $this;
    }

    /**
     * Get couverture
     *
     * @return string 
     */
    public function getCouverture()
    {
        return $this->couverture;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Livre
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    
        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Livre
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set edition
     *
     * @param string $edition
     * @return Livre
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
    
        return $this;
    }

    /**
     * Get edition
     *
     * @return string 
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set dateEdition
     *
     * @param \DateTime $dateEdition
     * @return Livre
     */
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;
    
        return $this;
    }

    /**
     * Get dateEdition
     *
     * @return \DateTime 
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }

    /**
     * Set lienAchat
     *
     * @param string $lienAchat
     * @return Livre
     */
    public function setLienAchat($lienAchat)
    {
        $this->lienAchat = $lienAchat;
    
        return $this;
    }

    /**
     * Get lienAchat
     *
     * @return string 
     */
    public function getLienAchat()
    {
        return $this->lienAchat;
    }

    /**
     * Set nombreDeVue
     *
     * @param integer $nombreDeVue
     * @return Livre
     */
    public function setNombreDeVue($nombreDeVue)
    {
        $this->nombreDeVue = $nombreDeVue;
    
        return $this;
    }

    /**
     * Get nombreDeVue
     *
     * @return integer 
     */
    public function getNombreDeVue()
    {
        return $this->nombreDeVue;
    }

    /**
     * Set enLigne
     *
     * @param boolean $enLigne
     * @return Livre
     */
    public function setEnLigne($enLigne)
    {
        $this->enLigne = $enLigne;
    
        return $this;
    }

    /**
     * Get enLigne
     *
     * @return boolean 
     */
    public function getEnLigne()
    {
        return $this->enLigne;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     * @return Livre
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;
    
        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime 
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Add avis_user_livre
     *
     * @param \Lsi\BiblioBundle\Entity\AvisUserLivre $avisUserLivre
     * @return Livre
     */
    public function addAvisUserLivre(\Lsi\BiblioBundle\Entity\AvisUserLivre $avisUserLivre)
    {
        $this->avis_user_livre[] = $avisUserLivre;
    
        return $this;
    }

    /**
     * Remove avis_user_livre
     *
     * @param \Lsi\BiblioBundle\Entity\AvisUserLivre $avisUserLivre
     */
    public function removeAvisUserLivre(\Lsi\BiblioBundle\Entity\AvisUserLivre $avisUserLivre)
    {
        $this->avis_user_livre->removeElement($avisUserLivre);
    }

    /**
     * Get avis_user_livre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAvisUserLivre()
    {
        return $this->avis_user_livre;
    }

    /**
     * Set Collection
     *
     * @param \Lsi\BiblioBundle\Entity\Collection $collection
     * @return Livre
     */
    public function setCollection(\Lsi\BiblioBundle\Entity\Collection $collection = null)
    {
        $this->Collection = $collection;
    
        return $this;
    }

    /**
     * Get Collection
     *
     * @return \Lsi\BiblioBundle\Entity\Collection 
     */
    public function getCollection()
    {
        return $this->Collection;
    }
    /**
     * @ORM\PrePersist
     */
    public function setDateAjoutValue()
    {
        // Add your code here
		
		if(!$this->getDateAjout())
		{
			$this->dateAjout = new \DateTime();
		}
    }
	
	//--------------------------------
	
	public function __toString()
	{
		return $this->getTitre();
	}
	public function getTitreSlug()
	{
		return Jobeet::slugify($this->getTitre());
	}
	public function getAuteurSlug()
	{
		return Jobeet::slugify($this->getAuteur());
	}
	public function getCollectionSlug()
	{
		return Jobeet::slugify($this->getCollection());
	}
    /**
     * @var string
     */
    private $support;


    /**
     * Set support
     *
     * @param string $support
     * @return Livre
     */
    public function setSupport($support)
    {
        $this->support = $support;
    
        return $this;
    }

    /**
     * Get support
     *
     * @return string 
     */
    public function getSupport()
    {
        return $this->support;
    }
}