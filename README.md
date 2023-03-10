# BaksDev Field Country 

![Version](https://img.shields.io/badge/version-6.2-blue) ![php 8.1+](https://img.shields.io/badge/php-min%208.1-red.svg)

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
Шаблоны переопределяются в директории templates в виде текстового представления (content.html.twig), и шаблона (template.html.twig)

- /templates/CountryField/content.html.twig
- /templates/CountryField/template.html.twig


## Журнал изменений ![Changelog](https://img.shields.io/badge/changelog-yellow)

О том, что изменилось за последнее время, обратитесь к [CHANGELOG](CHANGELOG.md) за дополнительной информацией.

## Лицензия ![License](https://img.shields.io/badge/MIT-green)

The MIT License (MIT). Обратитесь к [Файлу лицензии](LICENSE.md) за дополнительной информацией.


