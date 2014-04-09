<?php

namespace Proxies\__CG__\Lsi\BiblioBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class AvisUserLivre extends \Lsi\BiblioBundle\Entity\AvisUserLivre implements \Doctrine\ORM\Proxy\Proxy
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

    public function setLecture($lecture)
    {
        $this->__load();
        return parent::setLecture($lecture);
    }

    public function getLecture()
    {
        $this->__load();
        return parent::getLecture();
    }

    public function setNote($note)
    {
        $this->__load();
        return parent::setNote($note);
    }

    public function getNote()
    {
        $this->__load();
        return parent::getNote();
    }

    public function setCommentaire($commentaire)
    {
        $this->__load();
        return parent::setCommentaire($commentaire);
    }

    public function getCommentaire()
    {
        $this->__load();
        return parent::getCommentaire();
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

    public function setUser(\Lsi\BiblioBundle\Entity\User $user = NULL)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setLivre(\Lsi\BiblioBundle\Entity\Livre $livre = NULL)
    {
        $this->__load();
        return parent::setLivre($livre);
    }

    public function getLivre()
    {
        $this->__load();
        return parent::getLivre();
    }

    public function setDateAjoutValue()
    {
        $this->__load();
        return parent::setDateAjoutValue();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'lecture', 'note', 'commentaire', 'dateAjout', 'user', 'livre');
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