<?php

namespace Lsi\BiblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AvisUserLivre
 */
class AvisUserLivre
{
    public $livre_id;
    public $user_id;
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $lecture;

    /**
     * @var integer
     */
    private $note;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var \DateTime
     */
    private $dateAjout;

    /**
     * @var \Lsi\BiblioBundle\Entity\User
     */
    private $user;

    /**
     * @var \Lsi\BiblioBundle\Entity\Livre
     */
    private $livre;


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
     * Set lecture
     *
     * @param string $lecture
     * @return AvisUserLivre
     */
    public function setLecture($lecture)
    {
        $this->lecture = $lecture;
    
        return $this;
    }

    /**
     * Get lecture
     *
     * @return string 
     */
    public function getLecture()
    {
        return $this->lecture;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return AvisUserLivre
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return AvisUserLivre
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     * @return AvisUserLivre
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
     * Set user
     *
     * @param \Lsi\BiblioBundle\Entity\User $user
     * @return AvisUserLivre
     */
    public function setUser(\Lsi\BiblioBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Lsi\BiblioBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set livre
     *
     * @param \Lsi\BiblioBundle\Entity\Livre $livre
     * @return AvisUserLivre
     */
    public function setLivre(\Lsi\BiblioBundle\Entity\Livre $livre = null)
    {
        $this->livre = $livre;
    
        return $this;
    }

    /**
     * Get livre
     *
     * @return \Lsi\BiblioBundle\Entity\Livre 
     */
    public function getLivre()
    {
        return $this->livre;
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
}