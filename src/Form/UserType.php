<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class,['attr'=>[
                'class'=>'form-control'
            ],
            'label'=>'E-mail'])
            ->add('roles',TextType::class,['attr'=>[
                'class'=>'form-control'
            ],
            'label'=>'Roles',
            'required'=>true
            ])

            ->add('password',PasswordType::class,['attr'=>
            ['class'=>'form-control'],
            'label'=>'Password',
            'required'=>'true
            ²'
            ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
