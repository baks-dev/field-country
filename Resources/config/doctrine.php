<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Country\Type\Country;
use BaksDev\Field\Country\Type\CountryType;
use Symfony\Config\DoctrineConfig;

return static function (DoctrineConfig $doctrine) {

    $doctrine->dbal()->type(Country::TYPE)->class(CountryType::class);

};
