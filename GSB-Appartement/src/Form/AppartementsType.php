<?php

namespace App\Form;

use App\Entity\Appartements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class AppartementsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('typeappart')
        ->add('prixloc')
        ->add('prixcharg')
        ->add('adresse')
        ->add('codepostal')
        ->add('arrondissement')
        ->add('etage')
        ->add('ascenseur')
        ->add('preavis')
        ->add('datelibre', DateType::class, ['format' => 'dd-MM-yyyy'])
        ->add('numeroprop')
        ->add('numeroloc')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appartements::class,
        ]);
    }
}

