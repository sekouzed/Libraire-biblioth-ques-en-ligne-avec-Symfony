<?php

namespace Lsi\BiblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomComplet;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $role;

    /**
     * @var \DateTime
     */
    private $dateInscription;

    /**
     * @var boolean
     */
    private $userSuspendu;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $avis_user_livre;

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
     * Set nomComplet
     *
     * @param string $nomComplet
     * @return User
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;
    
        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string 
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return User
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    
        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set userSuspendu
     *
     * @param boolean $userSuspendu
     * @return User
     */
    public function setUserSuspendu($userSuspendu)
    {
        $this->userSuspendu = $userSuspendu;
    
        return $this;
    }

    /**
     * Get userSuspendu
     *
     * @return boolean 
     */
    public function getUserSuspendu()
    {
        return $this->userSuspendu;
    }

    /**
     * Add avis_user_livre
     *
     * @param \Lsi\BiblioBundle\Entity\AvisUserLivre $avisUserLivre
     * @return User
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
     * @ORM\PrePersist
     */
    public function setDateInscriptionValue()
    {
        // Add your code here 
		if(!$this->getDateInscription())
		{
			$this->dateInscription = new \DateTime();
		}
    }
	
	public function __toString()
	{
		return $this->getNomComplet();
	}
}