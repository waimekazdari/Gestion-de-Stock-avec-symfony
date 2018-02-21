<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class Ar_entreeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantite')
            ->add('entree',EntityType::class, array(
                'class'=>'AppBundle\Entity\Entree',
                'choice_label'=>'ref',
                'expanded'=>false,
                'multiple'=>false
                ))
            ->add('article',EntityType::class, array(
                'class'=>'AppBundle\Entity\Article',
                'choice_label'=>'ref',
                'expanded'=>false,
                'multiple'=>false
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ar_entree'
        ));
    }
}
