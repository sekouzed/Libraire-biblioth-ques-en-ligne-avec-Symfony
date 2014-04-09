<?php

namespace Proxies\__CG__\Lsi\BiblioBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Livre extends \Lsi\BiblioBundle\Entity\Livre implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function setCouverture($couverture)
    {
        $this->__load();
        return parent::setCouverture($couverture);
    }

    public function getCouverture()
    {
        $this->__load();
        return parent::getCouverture();
    }

    public function setResume($resume)
    {
        $this->__load();
        return parent::setResume($resume);
    }

    public function getResume()
    {
        $this->__load();
        return parent::getResume();
    }

    public function setAuteur($auteur)
    {
        $this->__load();
        return parent::setAuteur($auteur);
    }

    public function getAuteur()
    {
        $this->__load();
        return parent::getAuteur();
    }

    public function setEdition($edition)
    {
        $this->__load();
        return parent::setEdition($edition);
    }

    public function getEdition()
    {
        $this->__load();
        return parent::getEdition();
    }

    public function setDateEdition($dateEdition)
    {
        $this->__load();
        return parent::setDateEdition($dateEdition);
    }

    public function getDateEdition()
    {
        $this->__load();
        return parent::getDateEdition();
    }

    public function setLienAchat($lienAchat)
    {
        $this->__load();
        return parent::setLienAchat($lienAchat);
    }

    public function getLienAchat()
    {
        $this->__load();
        return parent::getLienAchat();
    }

    public function setNombreDeVue($nombreDeVue)
    {
        $this->__load();
        return parent::setNombreDeVue($nombreDeVue);
    }

    public function getNombreDeVue()
    {
        $this->__load();
        return parent::getNombreDeVue();
    }

    public function setEnLigne($enLigne)
    {
        $this->__load();
        return parent::setEnLigne($enLigne);
    }

    public function getEnLigne()
    {
        $this->__load();
        return parent::getEnLigne();
    }

    public function setDateAjout($dateAjout)
    {
        $this->__load();
        return parent::setDateAjout($dateAjout);
    }

    public function getDateAjout()
    {
        $this->__load();
        return parent::getDateAjout();
    }

    public function addAvisUserLivre(\Lsi\BiblioBundle\Entity\AvisUserLivre $avisUserLivre)
    {
        $this->__load();
        return parent::addAvisUserLivre($avisUserLivre);
    }

    public function removeAvisUserLivre(\Lsi\BiblioBundle\Entity\AvisUserLivre $avisUserLivre)
    {
        $this->__load();
        return parent::removeAvisUserLivre($avisUserLivre);
    }

    public function getAvisUserLivre()
    {
        $this->__load();
        return parent::getAvisUserLivre();
    }

    public function setCollection(\Lsi\BiblioBundle\Entity\Collection $collection = NULL)
    {
        $this->__load();
        return parent::setCollection($collection);
    }

    public function getCollection()
    {
        $this->__load();
        return parent::getCollection();
    }

    public function setDateAjoutValue()
    {
        $this->__load();
        return parent::setDateAjoutValue();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getTitreSlug()
    {
        $this->__load();
        return parent::getTitreSlug();
    }

    public function getAuteurSlug()
    {
        $this->__load();
        return parent::getAuteurSlug();
    }

    public function getCollectionSlug()
    {
        $this->__load();
        return parent::getCollectionSlug();
    }

    public function setSupport($support)
    {
        $this->__load();
        return parent::setSupport($support);
    }

    public function getSupport()
    {
        $this->__load();
        return parent::getSupport();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'titre', 'couverture', 'resume', 'support', 'auteur', 'edition', 'dateEdition', 'lienAchat', 'nombreDeVue', 'enLigne', 'dateAjout', 'avis_user_livre', 'Collection');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}