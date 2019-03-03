<?php

namespace DirectoryPlatform\FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubscriberType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{		
		$builder
			->add('email', EmailType::class, [
				'label' => false,
				'required' => true,
				'attr' => [
					'placeholder' => 'E-mail address'
				],
			])
			->add('save', SubmitType::class, [
				'label' => 'Subscribe',
				'attr' => ['class' => 'btn btn-primary'],
			])			
			->setAction($options['router']->generate('subscriber_subscribe'));
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'router' => null,
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\Subscriber',
		]);
	}
}