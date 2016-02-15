<?php

namespace StoreBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension,
    Symfony\Component\OptionsResolver\OptionsResolverInterface,
    Symfony\Component\Form\FormView,
    Symfony\Component\Form\FormInterface,
    Symfony\Component\PropertyAccess\PropertyAccess,
    StoreBundle\Constant\CollectionLayoutConstants;

class CollectionTypeExtension extends AbstractTypeExtension
{

    private static $items = [
        'layout'            => CollectionLayoutConstants::SINGLE_TABLE,
        'prototype_only'    => false,
    ];

    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getExtendedType()
    {
        return 'collection';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setOptional( array_keys(self::$items) );

        $resolver->setDefaults( self::$items );
    }

    /**
     * @param FormView $view
     * @param FormInterface $form
     * @param array $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $items = array_keys( self::$items );

        foreach($items as $item) {
            if( array_key_exists($item, $options) ) {
                $view->vars[ $item ] = $options[ $item ];
            }
        }
    }
}