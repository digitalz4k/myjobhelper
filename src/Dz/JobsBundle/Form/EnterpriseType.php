<?php

namespace Dz\JobsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnterpriseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('enterpriseName')->add('enterpriseLogoUrl')->add('enterpriseDescription')->add('enterpriseReferentFullname')->add('enterpriseReferentEmail')->add('enterpriseReferentPhone')->add('enterpriseAddress')->add('enterpriseCity')->add('enterpriseZip')->add('enterpriseCountry')->add('enterpriseGeolocationCoords')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dz\JobsBundle\Entity\Enterprise'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dz_jobsbundle_enterprise';
    }


}
