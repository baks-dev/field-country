# BaksDev Field Country

[![Version](https://img.shields.io/badge/version-7.3.0-blue)](https://github.com/baks-dev/field-country/releases)
![php 8.4+](https://img.shields.io/badge/php-min%208.4-red.svg)
[![packagist](https://img.shields.io/badge/packagist-green)](https://packagist.org/packages/baks-dev/field-country)

Пакет выпадающего списка стран

## Установка

``` bash
$ composer require baks-dev/field-country
```

## Настройки

Для отображения в выпадающих списках полей, добавить настройку сервиса в конфиг:

config/packages/field.php

``` php
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Country\Choice\CountryFieldChoice;

return static function (ContainerConfigurator $configurator) {
	
	$services = $configurator->services()
            ->defaults()
            ->autowire(true)
            ->autoconfigure(true)
	;

	/** Страны */
	$services->set(CountryFieldChoice::class)
		->tag('baks.fields.choice')
	;
};

```

## Переопределение шаблонов

Шаблоны переопределяются в директории templates в виде текстового представления (content.html.twig), и шаблона (
template.html.twig)

- /templates/field-country/content.html.twig
- /templates/field-country/template.html.twig

## Лицензия ![License](https://img.shields.io/badge/MIT-green)

The MIT License (MIT). Обратитесь к [Файлу лицензии](LICENSE.md) за дополнительной информацией.
