<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return [
	'generalDesc' =>
  [
	  'NationalNumberPattern' => '(?:8\\d|90)\\d{8}|[24-8]\\d{7}',
	  'PossibleLength' =>
    [
      0 => 8,
      1 => 10,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'fixedLine' =>
  [
	  'NationalNumberPattern' => '210[7-9]\\d{4}|2(?:[024-7]\\d|1[1-9])\\d{5}',
	  'ExampleNumber' => '22123456',
	  'PossibleLength' =>
    [
      0 => 8,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'mobile' =>
  [
	  'NationalNumberPattern' => '6500[01]\\d{3}|5(?:0[01]|7[0-3])\\d{5}|(?:6[0-4]|7[0-3]|8[3-9])\\d{6}',
	  'ExampleNumber' => '83123456',
	  'PossibleLength' =>
    [
      0 => 8,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'tollFree' =>
  [
	  'NationalNumberPattern' => '800\\d{7}',
	  'ExampleNumber' => '8001234567',
	  'PossibleLength' =>
    [
      0 => 10,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'premiumRate' =>
  [
	  'NationalNumberPattern' => '90[059]\\d{7}',
	  'ExampleNumber' => '9001234567',
	  'PossibleLength' =>
    [
      0 => 10,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'sharedCost' =>
  [
	  'PossibleLength' =>
    [
      0 => -1,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'personalNumber' =>
  [
	  'PossibleLength' =>
    [
      0 => -1,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'voip' =>
  [
	  'NationalNumberPattern' => '(?:210[0-6]|4\\d{3}|5100)\\d{4}',
	  'ExampleNumber' => '40001234',
	  'PossibleLength' =>
    [
      0 => 8,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'pager' =>
  [
	  'PossibleLength' =>
    [
      0 => -1,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'uan' =>
  [
	  'PossibleLength' =>
    [
      0 => -1,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'voicemail' =>
  [
	  'PossibleLength' =>
    [
      0 => -1,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'noInternationalDialling' =>
  [
	  'PossibleLength' =>
    [
      0 => -1,
    ],
	  'PossibleLengthLocalOnly' =>
    [
    ],
  ],
	'id' => 'CR',
	'countryCode' => 506,
	'internationalPrefix' => '00',
	'nationalPrefixForParsing' => '(19(?:0[0-2468]|1[09]|20|66|77|99))',
	'sameMobileAndFixedLinePattern' => false,
	'numberFormat' =>
  [
	  0 =>
    [
	    'pattern' => '(\\d{4})(\\d{4})',
	    'format' => '$1 $2',
	    'leadingDigitsPatterns' =>
      [
        0 => '[24-7]|8[3-9]',
      ],
	    'nationalPrefixFormattingRule' => '',
	    'domesticCarrierCodeFormattingRule' => '$CC $1',
	    'nationalPrefixOptionalWhenFormatting' => false,
    ],
	  1 =>
    [
	    'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
	    'format' => '$1-$2-$3',
	    'leadingDigitsPatterns' =>
      [
        0 => '[89]',
      ],
	    'nationalPrefixFormattingRule' => '',
	    'domesticCarrierCodeFormattingRule' => '$CC $1',
	    'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
	'intlNumberFormat' =>
  [
  ],
	'mainCountryForCode' => false,
	'leadingZeroPossible' => false,
	'mobileNumberPortableRegion' => false,
];
