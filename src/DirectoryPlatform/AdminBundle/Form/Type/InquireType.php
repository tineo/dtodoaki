<?php

namespace DirectoryPlatform\AdminBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InquireType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('name', TextType::class)
			->add('user', EntityType::class, [
				'class' => 'AppBundle:User',
				'required' => false,
			])
			->add('listing', EntityType::class, [
				'class' => 'AppBundle:Listing',
			])			
			->add('email', TextType::class)
			->add('message', TextareaType::class, [
				'attr' => [
					'rows' => 4,
				],
			])
			->add('save', SubmitType::class, [
				'attr' => ['class' => 'btn-primary'],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\Inquire',
		]);
	}
}