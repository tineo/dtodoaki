<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'payum.command.status' shared service.

$this->services['payum.command.status'] = $instance = new \Payum\Bundle\PayumBundle\Command\StatusCommand();

$instance->setContainer($this);
$instance->setName('payum:status');

return $instance;