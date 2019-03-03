<?php

namespace DirectoryPlatform\FrontBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilterHeroType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('keyword', TextType::class, [
				'label' => false,
				'required' => false,
				'attr' => [
					'placeholder' => 'Keyword Search',
				],
			])
			->add('place', TextType::class, [
				'label' => false,
				'required' => false,
				'attr' => [
					'placeholder' => 'Type Place',
				],
			])
			->add('place_latitude', HiddenType::class, [
				'label' => false,
				'required' => false,
			])	
			->add('place_longitude', HiddenType::class, [
				'label' => false,
				'required' => false
			])
			->add('radius_enabled', HiddenType::class, [
				'data' => true
			])
			->add('price_enabled', HiddenType::class, [
				'data' => true
			])												
			->add('category', EntityType::class, [
				'class' => 'AppBundle:Category',
				'label' => false,
				'required' => false,
				'placeholder' => 'All Categories',
				'choice_label' => function($category) use ($options) {
					return $options['hierarchy']->getName($category);
				},
				'choice_attr' => function($val, $key, $index) {					
					if (!empty($val->getFontIcon())) {
						return ['data-icon' => $val->getFontIcon()];
					}		

					return [];
				}
			])
			->add('save', SubmitType::class, [
				'label' => 'Search Listings',
				'attr' => ['class' => 'btn btn-primary btn-block'],
			])
			->setMethod('GET')			
			->setAction($options['router']->generate('listing'));
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'router' => null,
			'hierarchy' => null,
			'csrf_protection' => false,
			'allow_extra_fields' => true,
		]);
	}

	public function getBlockPrefix()
	{
		return null;
	}
}