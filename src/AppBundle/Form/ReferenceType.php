<?php

namespace AppBundle\Form;

use AppBundle\Entity\Bibliography;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class ReferenceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nameOfAuthor')
            ->add('yearPublished')
            ->add('titleOfReference')
            ->add('cityPublished')
            ->add('publisher')
            ->add('pagesUsed')
            ->add('textSummary')
            ->add('status', ChoiceType::class, [
                'placeholder' => 'Select Status',
                'choices' => [
                    'Pending' => 'Pending',
                    'Public' => 'Public',
                ]
            ])
            ->add('referenceBibliographies', EntityType::class, [
                'class' => Bibliography::class,
                'multiple' => true,
                'expanded' => true,
                'choice_label' => 'bibliographyName',
            ])
            ->add('referenceTags', EntityType::class, [
                'class' => Tag::class,
                'multiple' => true,
                'expanded' => true,
                'choice_label' => 'tagName',
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Reference'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_reference';
    }


}
