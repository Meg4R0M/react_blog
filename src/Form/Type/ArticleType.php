<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Validator\Constraints as Assert;

use App\Form\DataTransformer\FileToDataUriTransformer;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', Type\TextType::class, [
                'label' => 'Titre',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ajouter un titre'
                ],
                'liform' => [
                    'description' => 'Titre de l\'article'
                ]
            ])
            ->add('accroche', Type\TextType::class, [
                'label' => 'Accroche',
                'liform' => [
                    'widget' => 'textarea'
                ]
            ])
            ->add('image', Type\TextType::class, [
                'label' => 'Image',
                'liform' => [
                    'widget' => 'file'
                ]
            ])
        ;

//        ->add('post')
//        ->add('publie_le')
//        ->add('modifie_le')
//        ->add('auteur')
//        ->add('publie')
//        ->add('categorie')
//        ->add('image')

        $builder->get('image')->addViewTransformer(new FileToDataUriTransformer());
    }
}
