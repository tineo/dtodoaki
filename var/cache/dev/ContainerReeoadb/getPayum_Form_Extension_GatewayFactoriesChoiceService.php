<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.form.extension.gateway_factories_choice' shared service.

return $this->services['payum.form.extension.gateway_factories_choice'] = new \Payum\Bundle\PayumBundle\Form\Extension\GatewayFactoriesChoiceTypeExtension(${($_ = isset($this->services['payum']) ? $this->services['payum'] : $this->load('getPayumService.php')) && false ?: '_'});