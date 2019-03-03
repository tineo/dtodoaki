<?php

namespace DirectoryPlatform\FrontBundle\Form\Type;

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
			->add('email', TextType::class)
			->add('message', TextareaType::class, [
				'attr' => [
					'rows' => 4,
				],
			])
			->add('save', SubmitType::class, [
				'label' => 'Send Message',
				'attr' => ['class' => 'btn btn-primary btn-block'],
			])
			->setAction($options['router']->generate('inquire', [
				'id' => $options['listing']->getId()
			]));
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'router' => null,
			'listing' => null,
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\Inquire',
		]);
	}
}