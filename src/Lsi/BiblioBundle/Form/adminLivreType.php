<?php

namespace Lsi\BiblioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class adminLivreType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Collection')
            ->add('titre')
            ->add('auteur')
            ->add('edition')
            ->add('dateEdition')
            ->add('file', 'file', array('label' => 'image de couverture', 'required' => false))
            ->add('resume')
            ->add('file2', 'file', array('label' => 'Le support du livre', 'required' => false))
            ->add('lienAchat') 
            ->add('enLigne') 
        ;
    } 
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lsi\BiblioBundle\Entity\Livre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lsi_bibliobundle_livre';
    }
}
