<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DictionaryComponentResponseOfint64AndDestinyCharacterRecordsComponent
 */
class DictionaryComponentResponseOfint64AndDestinyCharacterRecordsComponent
{

    const NAME = 'DictionaryComponentResponseOfint64AndDestinyCharacterRecordsComponent';

    const TYPE = 'object';

    public $data = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'Records',
            '$ref' => '#/components/schemas/Destiny.Components.Records.DestinyCharacterRecordsComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int64',
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

