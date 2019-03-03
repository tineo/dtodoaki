<?php

namespace DirectoryPlatform\AppBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;


class GlobalExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
	private $container;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}

	public function getGlobals()
	{
		return [
			'currency' => $this->container->getParameter('app.currency'),
			'payments' => $this->container->getParameter('app.payments'),
			'gateways' => $this->container->getParameter('app.gateways'),
			'invoicing' => $this->container->getParameter('app.invoicing'),
            'map_styles' => $this->container->getParameter('app.map_styles'),
		];
	}

	public function getName()
	{
		return 'global_extension';
	}
}