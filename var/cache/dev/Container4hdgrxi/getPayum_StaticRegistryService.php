<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.static_registry' shared service.

$this->services['payum.static_registry'] = $instance = new \Payum\Core\Bridge\Symfony\ContainerAwareRegistry([], ['DirectoryPlatform\\AppBundle\\Entity\\Payment' => 'payum.storage.directoryplatform_appbundle_entity_payment'], []);

$instance->setContainer($this);

return $instance;