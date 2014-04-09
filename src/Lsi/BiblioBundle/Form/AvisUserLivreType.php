<?php

namespace Lsi\BiblioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AvisUserLivreType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lecture','choice',array('label' => 'Avez-vous lu ce livre?','choices'=>array('deja lu'=>'Oui,j\'ai deja lu','non lu'=>'Non, pas encore lu','en lecture'=>'Non je suis entrain de le lire'), 'expanded' => false))
            ->add('note','choice',array('choices'=>array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5), 'expanded' => false))
            ->add('commentaire','textarea')  
        ;    
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lsi\BiblioBundle\Entity\AvisUserLivre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lsi_bibliobundle_avisuserlivre';
    }
}
