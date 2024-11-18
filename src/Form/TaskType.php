<?php

namespace App\Form;

use App\Entity\Comment;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\NotNull;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title',TextType::class,[
            'required'=>true,
            'constraint'=>[
                new NotBlank([
                    'message'=>'Un titre doit etre saisie',
                ]),

                new Length([
                    'min'=>5,
                    'MinMessage'=>'Le titre doit contenir au moins {{ limit}}caracteres',
                    'max'=>255, ]),
            ],
        ]);
      $builder->add('content',TextareaType::class,['constraints'=>[new NotNull(),New Length([
        'min'=>255,
      ])]]);
        }
    

    
}
