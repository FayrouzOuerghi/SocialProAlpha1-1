<?php

namespace SocialPro\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmploiType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('code')->add('nom')->add('prenom')->add('sexe')->add('email')->add('tel')->add('langues')->add('dateNaissance')->add('lieuNaissance')->add('ville')->add('codePostal')->add('experience_date_fonction')->add('employeur')->add('principale_activite_responsabilite')->add('formation_education')->add('competance_communication')->add('organi_manageriel')->add('competance_numerique')->add('competance_emploi')->add('date')->add('confirmation')->add('reponse')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SocialPro\MainBundle\Entity\Emploi'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'socialpro_mainbundle_emploi';
    }


}
