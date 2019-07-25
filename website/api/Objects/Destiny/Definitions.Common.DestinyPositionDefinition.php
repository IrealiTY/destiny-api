<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Common.DestinyPositionDefinition
 */
class Definitions.Common.DestinyPositionDefinition
{

    const NAME = 'Destiny.Definitions.Common.DestinyPositionDefinition';

    const TYPE = 'object';

    public $x = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $y = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $z = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}

