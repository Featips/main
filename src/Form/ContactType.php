<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactType extends AbstractType
{

    // private $entityManager;

    // public function __construct(EntityManagerInterface $entityManager)
    // {
    //     $this->entityManager = $entityManager;
    // }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {   
        /* @var User $user*/

        // $user=$this->getUser();
        // var_dump($user);
        // $firstname= ""; 
        // $lastname= "";
        // $email="";

        // if($user->getUser()){
            // $firstname = $user.firstname ;
        // }
        
        
        $builder
        ->add('firstname', TextType::class,[
                    'label' => 'prénom',
                    // 'value' => $firstname,

                ])
        ->add('lastname', TextType::class,[
                    'label' => 'nom',
                    // 'value' => $lastname,
               ])
        ->add('email', EmailType::class, [
                    'disabled' => true,
                    'label' => 'mail',
                ])  
        ->add('texte', TextareaType::class,[
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
            'data_class' => ContactType::class,
        ]);
    }
}
