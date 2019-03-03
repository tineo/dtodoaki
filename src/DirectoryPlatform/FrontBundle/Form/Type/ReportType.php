<?php

namespace DirectoryPlatform\FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReportType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('message', TextareaType::class, [
				'attr' => [
					'rows' => 4,
				],
			])
			->add('save', SubmitType::class, [
				'label' => 'Report',
				'attr' => ['class' => 'btn btn-primary'],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\Report',
		]);
	}
}