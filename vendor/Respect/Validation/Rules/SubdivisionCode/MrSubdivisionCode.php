<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace framework\vendor\Respect\Validation\Rules\SubdivisionCode;

use framework\vendor\Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Mauritania subdivision code.
 *
 * ISO 3166-1 alpha-2: MR
 *
 * @link http://www.geonames.org/MR/administrative-division-mauritania.html
 */
class MrSubdivisionCode extends AbstractSearcher
{
    public $haystack = [
        '01', // Hodh Ech Chargui
        '02', // Hodh El Gharbi
        '03', // Assaba
        '04', // Gorgol
        '05', // Brakna
        '06', // Trarza
        '07', // Adrar
        '08', // Dakhlet Nouadhibou
        '09', // Tagant
        '10', // Guidimaka
        '11', // Tiris Zemmour
        '12', // Inchiri
        'NKC', // Nouakchott
    ];

    public $compareIdentical = true;
}
