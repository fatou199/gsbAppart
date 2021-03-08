<?php

namespace App\Form;

use App\Entity\Recherche;
use App\Entity\Appartements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeappart')
            ->add('arrondissement')
            ->add('prixlocmin', IntegerType::class,[
                'required' => false,
                'label' => false,
                'attr'=>[
                    'placeholder' => 'Surface minimum'
                ]
            ])
            ->add('prixlocmax', IntegerType::class,[
                'required' => false,
                'label' => false,
                'attr'=>[
                    'placeholder' => 'Surface minimum'
                ]
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appartements::class,
            'method' => 'get',
            'csrf_protection' =>false,
        ]);
    }

}
