<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.form.type.gateway_config' shared service.

return $this->services['payum.form.type.gateway_config'] = new \Payum\Core\Bridge\Symfony\Form\Type\GatewayConfigType(${($_ = isset($this->services['payum']) ? $this->services['payum'] : $this->load('getPayumService.php')) && false ?: '_'});
