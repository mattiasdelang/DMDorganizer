<?php

namespace AppBundle\Form;

use AppBundle\Entity\Gebruiker;
use AppBundle\Entity\Gezin;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GezinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gebruikers', EntityType::class, [
                'class' => Gebruiker::class,
                'choice_label' => 'gebruikersnaam',
                'multiple' => true,
                'expanded' => true,
            ])
        ;

        $this->knoppenToevoegen($builder);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Gezin::class,
        ));
    }

    private function knoppenToevoegen(FormBuilderInterface $builder)
    {
        $builder
            ->add('opslaan', SubmitType::class)
            ->add('annuleer', SubmitType::class)
        ;
    }
}