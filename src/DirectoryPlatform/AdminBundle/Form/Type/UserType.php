<?php

namespace DirectoryPlatform\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array                $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('username', EmailType::class);

		if ($options['password_required']) {
			$builder->add('password', TextType::class, [
				'data' => null,
			]);
		} else {
			$builder->add('password', TextType::class, [
				'required' => false,
				'data' => null,
			]);
		}

		$builder
			->add('enabled', CheckboxType::class, [
				'required' => false
			])
			->add('save', SubmitType::class, [
				'attr' => ['class' => 'btn-primary'],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'password_required' => true,
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\User',
		]);
	}
}
