<?php

namespace SocialPro\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type',ChoiceType::class, array(
            'choices'  => array(
                'Formation' => 'Formation',
                'Stage' => 'Stage',
                'Emploi' => 'Emploi',
                'Offre' => 'Offre',
                'Notre Site' => 'Notre Site',
                'Autres' => 'Autres')))
            ->add('nom',TextType::class,array('attr' => array('rows' => '30','cols' => '50')))
            ->add('code',TextType::class,array('attr' => array('rows' => '30','cols' => '50')))
            ->add('description',TextareaType::class,array('attr' => array('rows' => '15','cols' => '50')))

            ->add('date')
            ->add('reponse',HiddenType::class)

            ->add('ajouter',SubmitType::class)       ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SocialPro\MainBundle\Entity\Reclamation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'socialpro_mainbundle_reclamation';
    }


}
