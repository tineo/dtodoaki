<?php

namespace DirectoryPlatform\AdminBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

use DirectoryPlatform\AppBundle\Entity\Rating;

class ReviewType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options ) {
		$builder
			->add('listing', EntityType::class, [
			'class' => 'AppBundle:Listing',
		])
		->add('name', TextType::class, [
			'required' => false,
		])
		->add('user', EntityType::class, [
			'class' => 'AppBundle:User',
			'required' => false,
		]);

		foreach(Rating::TYPES as $type) {
			$value = null;

			if (!empty($options['ratings'])) {
				/** @var Rating $rating */
				foreach ($options['ratings'] as $rating) {
					if ($rating->getType() === $type['id']) {
						$value = $rating->getValue();
					}
				}
			}

			$builder->add($type['id'], ChoiceType::class, [
				'required' => false,
				'label' => $type['label'],
				'mapped' => false,
				'choices' => array_combine(range(1, $type['max']), range(1, $type['max'])),
				'data' => $value,
			]);
		}

		$builder
			->add('description', TextareaType::class, [
				'attr' => [
					'rows' => 3,
				]
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
			'user' => null,
			'ratings' => null,
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\Review',
		]);
	}
}