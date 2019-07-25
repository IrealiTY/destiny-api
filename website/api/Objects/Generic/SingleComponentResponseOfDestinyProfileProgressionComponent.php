<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * SingleComponentResponseOfDestinyProfileProgressionComponent
 */
class SingleComponentResponseOfDestinyProfileProgressionComponent
{

    const NAME = 'SingleComponentResponseOfDestinyProfileProgressionComponent';

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Components.Profiles.DestinyProfileProgressionComponent',
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

