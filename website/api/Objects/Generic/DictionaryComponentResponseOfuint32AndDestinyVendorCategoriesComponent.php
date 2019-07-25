<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent
 */
class DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent
{

    const NAME = 'DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent';

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'VendorCategories',
            '$ref' => '#/components/schemas/Destiny.Entities.Vendors.DestinyVendorCategoriesComponent',
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

