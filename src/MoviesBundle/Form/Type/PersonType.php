<?php
/**
 * Created by PhpStorm.
 * User: devel
 * Date: 2/07/15
 * Time: 16:48
 */

namespace MoviesBundle\Form\Type;

use HolaBundle\Entity\Operation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class PersonType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'required' => true,
                'label' => 'Name'
            ))
            ->add('gender', 'choice', array(
                'empty_value' => 'Select a gender',
                'choices' => array(
                    'male' => 'Male',
                    'female' => 'Female'
                ),
                'required' => true,
                'label' => 'Gender'
            ))
            ->add('dateOfBirth', 'date', array(
                'required' => true,
                'label' => 'Date of birth',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('bio', 'textarea', array(
                'required' => false,
                'label' => 'Bio'
            ))
            /*->add('photo', 'file', array(
                'required' => false,
                'label' => 'Photo'
            ))*/
            ->add('Submit', 'submit')
            ->setMethod('POST');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MoviesBundle\Entity\Person',
        ));
    }

    public function getName()
    {
        return 'person';
    }

}