<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * SingleComponentResponseOfDestinyProfileComponent
 */
class SingleComponentResponseOfDestinyProfileComponent
{

    const NAME = 'SingleComponentResponseOfDestinyProfileComponent';

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Profiles.DestinyProfileComponent',
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

