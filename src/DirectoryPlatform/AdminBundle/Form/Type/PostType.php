<?php

namespace DirectoryPlatform\AdminBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Vich\UploaderBundle\Form\Type\VichImageType;

class PostType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array                $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('name', TextType::class)
			->add('slug', TextType::class)
			->add('description', TextareaType::class, [
				'attr' => ['class' => 'wysiwyg', 'rows' => 5],
			])
			->add('category', EntityType::class, [
				'class' => 'AppBundle:Category',
				'required' => false,
				'choices' => $options['hierarchy_categories']->tree(),
				'choice_label' => function($category) use ($options) {
					return $options['hierarchy_categories']->getName($category);
				},
			])
			->add('image', VichImageType::class, [
				'required' => false,
				'allow_delete' => true,
				'download_link' => true,
			])			
			->add('isPublished', CheckboxType::class, [
				'required' => false,
			])
			->add('save', SubmitType::class, [
				'attr' => ['class' => 'btn-primary'],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'hierarchy_categories' => null,
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\Post',
		]);
	}
}
