<?php

namespace App\Form;

use App\Entity\Artist;
use App\Entity\Skill;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArtistType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('age')
            ->add('description')
            ->add('picture')
            ->add('Skills', EntityType::class, [
                'class' => Skill::class,
                'choice_label' => function (Skill $skill) {
                    return $skill->getTitle();
            },
                'expanded' => true,
                'multiple' => true,
                'by_reference'=> false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Artist::class,
        ]);
    }
}
