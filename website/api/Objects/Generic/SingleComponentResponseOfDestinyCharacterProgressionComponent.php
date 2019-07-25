<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * SingleComponentResponseOfDestinyCharacterProgressionComponent
 */
class SingleComponentResponseOfDestinyCharacterProgressionComponent
{

    const NAME = 'SingleComponentResponseOfDestinyCharacterProgressionComponent';

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Characters.DestinyCharacterProgressionComponent',
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

