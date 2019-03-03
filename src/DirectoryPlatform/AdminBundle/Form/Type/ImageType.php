<?php

namespace DirectoryPlatform\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Vich\UploaderBundle\Form\Type\VichImageType;

class ImageType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('image', VichImageType::class, [
				'label' => false,
				'required' => false,
				'allow_delete' => true,
				'download_uri' => false
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => 'DirectoryPlatform\AppBundle\Entity\Image'
		]);
	}
}