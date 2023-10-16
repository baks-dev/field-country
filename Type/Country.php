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

final class Country
{
	
	public const TYPE = 'country_type';
	
	private CountryEnum $country;
	
	
	public function __construct(string|CountryEnum $country)
	{
		if($country instanceof CountryEnum)
		{
			$this->country = $country;
		}
		else
		{
			$this->country = CountryEnum::from($country);
		}
	}
	
	
	public function __toString(): string
	{
		return $this->country->value;
	}
	
	
	/** Возвращает Enum страны   */
	public function getCountryEnum() : CountryEnum
	{
		return $this->country;
	}
	
	
	/** Возвращает значение (value) страны String */
	public function getCountryEnumValue(): string
	{
		return $this->country->value;
	}
	
	
	/** Возвращает ключ (name) Enum страны */
	public function getCountryEnumName(): string
	{
		return $this->country->name;
	}
	
	
	/** Возвращает массив из значнией CountryEnum */
	public static function cases() : array
	{
		$case = null;
		
		foreach(CountryEnum::cases() as $color)
		{
			$case[] = new self($color);
		}
		
		return $case;
	}
	
}