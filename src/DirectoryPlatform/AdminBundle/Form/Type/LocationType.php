<?php

namespace DirectoryPlatform\AdminBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Vich\UploaderBundle\Form\Type\VichImageType;


class LocationType extends AbstractType
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
			->add('location', EntityType::class, [
				'class' => 'AppBundle:Location',
				'required' => false,
				'choices' => $options['hierarchy']->tree(),
				'choice_label' => function($location) use ($options) {
					return $options['hierarchy']->getName($location);
				},
				'choice_attr' => function($location) use ($options) {
					if ($options['data']->getId() === $location->getId()) {
						return ['disabled' => 'disabled'];
					}
					return [];
				}
			])
			->add('image', VichImageType::class, [
				'required' => false,
				'allow_delete' => true,
				'download_link' => false,
			])
			->add('save', SubmitType::class, [
				'attr' => ['class' => 'btn-primary'],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'hierarchy' => null,
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\Location',
		]);
	}
}