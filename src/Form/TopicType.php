<?php

namespace App\Form;

use App\Form\PostType;
use App\Entity\ForumTopic;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class TopicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class,[
                'label' => 'topic.title',
                'attr'  => ['class' => 'textarea_post'] 
            ])
            ->add('content', TextareaType::class,[
                'label' => 'topic.content',
                'attr'  => ['class' => 'textarea_topic'] 
            ])
            // ->add(
            //     'post',
            //     CollectionType::class,
            //     [
            //         'entry_type' => PostType::class,
                    
            //     ]
            // )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ForumTopic::class,
        ]);
    }
}
