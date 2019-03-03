<?php

namespace DirectoryPlatform\AdminBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CategoryType extends AbstractType
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
			->add('fontIcon', TextType::class, [
				'required' => false
			])
			->add('category', EntityType::class, [
				'class' => 'AppBundle:Category',
				'required' => false,
				'choices' => $options['hierarchy']->tree(),
				'choice_label' => function($category) use ($options) {
					return $options['hierarchy']->getName($category);
				},
				'choice_attr' => function($category) use ($options) {
					if ($options['data']->getId() === $category->getId()) {
						return ['disabled' => 'disabled'];
					}
					return [];
				}
			])
			->add('save', SubmitType::class, [
				'attr' => ['class' => 'btn-primary'],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'hierarchy' => null,
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\Category',
		]);
	}
}