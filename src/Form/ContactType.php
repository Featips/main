<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('firstname', TextType::class,[
            'label' => 'prénom',
        ])
        ->add('lastname', TextType::class,[
            'label' => 'nom',
        ])
        ->add('email', EmailType::class, [
            'disabled' => true,
            'label' => 'Mon email',
        ])
        ->add('texte', TextType::class,[
            'label' => 'Votre message'
        ])
        ->add('submit', SubmitType::class,[
            'label' => 'Envoyer'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
