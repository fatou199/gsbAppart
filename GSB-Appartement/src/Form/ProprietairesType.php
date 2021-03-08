<?php

namespace App\Form;

use App\Entity\Proprietaires;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProprietairesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder          
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('codeVille')
            ->add('tel')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Proprietaires::class,
        ]);
    }
}
