<?php

namespace Afpa\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
<<<<<<< HEAD

=======
>>>>>>> FETCH_HEAD
class ProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('price')
<<<<<<< HEAD
            ->add('photo')
            ->add('body')
            ->add('stock')
            //->add('created')
            ->add('brand', 'entity', array('class' => 'AfpaCatalogBundle:Brand', 'property' => 'title'))
            ->add('categories', 'entity', array('class' => 'AfpaCatalogBundle:Category', 'property' => 'title', 'multiple'=>true))
            ->add('save', 'submit')

=======
            ->add('body')
            ->add('stock')
            ->add('photo')
            ->add('categories', 'entity', array('class' => 'AfpaCatalogBundle:Category', 'property' => 'title', 'multiple' => true))
            ->add('brand', 'entity', array('class' => 'AfpaCatalogBundle:Brand', 'property' => 'title' ))
            ->add('save', 'submit')
>>>>>>> FETCH_HEAD
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Afpa\CatalogBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'afpa_catalogbundle_product';
    }
}
