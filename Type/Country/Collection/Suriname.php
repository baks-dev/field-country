<?php
/*
 *  Copyright 2025.  Baks.dev <admin@baks.dev>
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
 *  FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 */

declare(strict_types=1);

namespace BaksDev\Field\Country\Type\Country\Collection;

use BaksDev\Field\Country\Type\Country\CountryInterface;
use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag('baks.country')]
final class Suriname implements CountryInterface
{
    public const string COUNTRY = 'sr';

    public const string ALPHA = 'SUR';

    public const ?int PHONE = null;

    public const string NUMERIC = '740';

    public const array HAYSTACK = [
        self::COUNTRY,
        self::ALPHA,
    ];

    public function __toString(): string
    {
        return self::COUNTRY;
    }

    /** Возвращает значение (value) */
    public function getValue(): string
    {
        return self::COUNTRY;
    }

    public function getPhoneCode(): ?int
    {
        return self::PHONE;
    }


    /** Проверяет, относится ли значение к данному объекту */
    public static function equals(mixed $country): bool
    {
        return array_any(
            self::HAYSTACK,
            static fn($item) => str_contains(mb_strtolower((string) $country), mb_strtolower((string) $item))
        );
    }

    /**
     * Метод фильтрует значение, удаляя его из строки
     */
    public static function filter(string $country): string
    {
        $country = (string) str_ireplace(self::HAYSTACK, '', $country);
        $country = preg_replace('/\s+/', ' ', $country);

        return trim($country);
    }
}