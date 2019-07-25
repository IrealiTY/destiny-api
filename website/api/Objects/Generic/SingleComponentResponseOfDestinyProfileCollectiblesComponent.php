<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * SingleComponentResponseOfDestinyProfileCollectiblesComponent
 */
class SingleComponentResponseOfDestinyProfileCollectiblesComponent
{

    const NAME = 'SingleComponentResponseOfDestinyProfileCollectiblesComponent';

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Components.Collectibles.DestinyProfileCollectiblesComponent',
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

