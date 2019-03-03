<?php

namespace DirectoryPlatform\FrontBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilterType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('keyword', TextType::class, [
				'label' => false,
				'required' => false,
				'attr' => [
					'placeholder' => 'Search by keyword',
				],
			])
			->add('place', TextType::class, [
				'mapped' => false,
				'label' => false,
				'required' => false,
				'attr' => [
					'placeholder' => 'Type Place',
				],
			])			
			->add('place_latitude', HiddenType::class, [
				'label' => false,
				'required' => false,
				'attr' => [
					'placeholder' => 'Place Latitude',
				],
			])	
			->add('place_longitude', HiddenType::class, [
				'label' => false,
				'required' => false,
				'attr' => [
					'placeholder' => 'Place Longitude',
				],
			])										
			->add('category', EntityType::class, [
				'class' => 'AppBundle:Category',
				'label' => false,
				'required' => false,
				'placeholder' => 'All Categories',
				'choice_label' => function($category) use ($options) {
					return $options['hierarchy_categories']->getName($category);
				},
				'choice_attr' => function($val, $key, $index) {					
					if (!empty($val->getFontIcon())) {
						return ['data-icon' => $val->getFontIcon()];
					}		

					return [];
				}				
			])
			// ->add('amenities', EntityType::class, [				
			// 	'multiple' => true,
			// 	'class' => 'AppBundle:Amenity',
			// 	'label' => false,
			// 	'required' => false,
			// 	'placeholder' => 'All Amenities',
			// 	'attr' => [
			// 		'title' => 'All Amenities',
			// 	],
			// 	'choice_attr' => function($val, $key, $index) {					
			// 		if (!empty($val->getFontIcon())) {
			// 			return ['data-icon' => $val->getFontIcon()];
			// 		}		

			// 		return [];
			// 	}				
			// ])	
	        ->add('price_enabled', CheckboxType::class, [
	        	'data' => true,
	        	'label' => 'Price',
	        	'mapped' => false,
	            'required' => false,
	        ])				
	        ->add('price', TextType::class, [
	        	'label' => false,
	            'required' => false,
	            'attr' => ['class' => 'hidden'],
	        ])			
	        ->add('price_from', HiddenType::class, [
	            'label' => false,
	            'required' => false,
	            'attr' => [
	            	'placeholder' => 'Price from'
	            ]
	        ])
	        ->add('price_to', HiddenType::class, [
	            'label' => false,
	            'required' => false,
	            'attr' => [
	            	'placeholder' => 'Price to'
	            ]	            
	        ])		
	        ->add('radius_enabled', CheckboxType::class, [
	        	'data' => true,
	        	'label' => 'Radius',
	        	'mapped' => false,
	            'required' => false,
	        ])			        			
			->add('radius', IntegerType::class, [	
				'label' => false,			
				'required' => false,
				'data' => 25,
				'attr' => [
					'class' => 'hidden',
					'placeholder' => 'Radius',
				],
			])									
			->add('save', SubmitType::class, [
				'label' => 'Search Listings',
				'attr' => ['class' => 'btn btn-primary'],
			])
			->setMethod('GET')
			->setAction($options['router']->generate('listing'));
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'router' => null,
			'hierarchy_categories' => null,
			'hierarchy_locations' => null,
			'csrf_protection' => false,
			'allow_extra_fields' => true,
		]);
	}

	public function getBlockPrefix()
	{
		return null;
	}
}