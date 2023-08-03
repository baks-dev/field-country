<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $configurator) {
	
	$services = $configurator->services()
		->defaults()
		->autowire(true)
		->autoconfigure(true)
	;

    $NAMESPACE = 'BaksDev\Field\Country\\';

    $MODULE = substr(__DIR__, 0, strpos(__DIR__, "Resources"));
	
	$services->load($NAMESPACE.'Form\\', $MODULE.'Form');
	$services->load($NAMESPACE.'Twig\\', $MODULE.'Twig');

};

