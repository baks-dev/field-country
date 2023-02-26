<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Reference\Color\Twig\ColorExtension;
use Symfony\Config\TwigConfig;

return static function(ContainerConfigurator $configurator, TwigConfig $twig) {
	$services = $configurator->services()
		->defaults()
		->autowire()
		->autoconfigure()
	;
	
	$namespace = 'BaksDev\Field\Country';
	
	$services->load($namespace.'\Twig\\', __DIR__.'/../../Twig');
	
	$twig->path(__DIR__.'/../view', 'CountryField');

};

