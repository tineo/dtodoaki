<?php

namespace DirectoryPlatform\FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
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
		if (empty($options['user'])) {
			$builder->add('name', TextType::class);
		}


		$builder
			->add('description', TextareaType::class, [
				'attr' => [
					'rows' => 5,
				]
			]);

		foreach(Rating::TYPES as $type) {
			$builder->add($type['id'], ChoiceType::class, [
				'required' => false,
				'label' => $type['label'],
				'mapped' => false,
				'choices' => array_combine(range(1, $type['max']), range(1, $type['max'])),
				'attr' => [
					'class' => 'rate',
				]
			]);
		}

		$builder->add('save', SubmitType::class, [
				'attr' => ['class' => 'btn-primary'],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'user' => null,
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\Review',
		]);
	}
}