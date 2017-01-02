<?php

namespace Dz\JobsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApplicationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('applicationJob')->add('applicationDescription')->add('applicationLink')->add('applicationDate')->add('applicationStatus')->add('applicationSalary')->add('applicationExperienceRequired')->add('applicationType')->add('applicationContract')->add('applicationAcceptDisabled')->add('applicationTags')->add('applicationFrom')->add('applicationEnterpriseId')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dz\JobsBundle\Entity\Application'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dz_jobsbundle_application';
    }


}
