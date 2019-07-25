<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DictionaryComponentResponseOfuint32AndDestinyVendorComponent
 */
class DictionaryComponentResponseOfuint32AndDestinyVendorComponent
{

    const NAME = 'DictionaryComponentResponseOfuint32AndDestinyVendorComponent';

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'Vendors',
            '$ref' => '#/components/schemas/Destiny.Entities.Vendors.DestinyVendorComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $privacy = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Components.ComponentPrivacySetting',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

