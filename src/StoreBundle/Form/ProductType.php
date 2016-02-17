<?php

namespace StoreBundle\Form;

use StoreBundle\Document\Description;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use StoreBundle\Form\DescriptionType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('price')
            ->add('description', 'collection', array(
                'label' => false,
                'required' => true,
                'type' => new DescriptionType(),
                'prototype' => true,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'attr' => array(
                    'data-row-limit' => 6
                )
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'StoreBundle\Document\Product'
        ));
    }

    public function getName()
    {
        return 'storebundle_producttype';
    }
}
