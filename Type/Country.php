<?php
/*
 *  Copyright 2023.  Baks.dev <admin@baks.dev>
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is furnished
 *  to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 *
 *
 */

namespace BaksDev\Field\Country\Type;

use BaksDev\Field\Country\Type\Country\Collection\CountryInterface;
use InvalidArgumentException;

final class Country
{
	
	public const TYPE = 'country_type';
	
	private CountryInterface $country;
	
	
	public function __construct(CountryInterface|self|string $country)
	{
        if(is_string($country) && class_exists($country))
        {
            $instance = new $country();

            if($instance instanceof CountryInterface)
            {
                $this->country = $instance;
                return;
            }
        }

        if($country instanceof CountryInterface)
        {
            $this->country = $country;
            return;
        }

        if($country instanceof self)
        {
            $this->country = $country->getCountry();
            return;
        }

        /** @var CountryInterface $declare */
        foreach(self::getDeclared() as $declare)
        {
            if($declare::equals($country))
            {
                $this->country = new $declare;
                return;
            }
        }

        throw new InvalidArgumentException(sprintf('Not found Country %s', $country));

	}

	public function __toString(): string
	{
		return $this->country->getValue();
	}

	public function getCountry() : CountryInterface
	{
		return $this->country;
	}
	

	public function getCountryValue(): string
	{
		return $this->country->getValue();
	}
	

    public static function cases(): array
    {
        $case = [];

        foreach(self::getDeclared() as $declare)
        {
            /** @var CountryInterface $declare */
            $class = new $declare;
            $case[$class::COUNTRY] = new self($class);
        }

        ksort($case);

        return $case;
    }

    public static function getDeclared(): array
    {
        return array_filter(
            get_declared_classes(),
            static function($className) {
                return in_array(CountryInterface::class, class_implements($className), true);
            }
        );
    }

    public function equals(mixed $country): bool
    {
        $country = new self($country);

        return $this->getCountryValue() === $country->getCountryValue();
    }







	
}