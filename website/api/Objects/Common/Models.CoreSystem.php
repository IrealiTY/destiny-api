<?php

namespace Destiny2\Api\Objects\Common;

/**
 * Models.CoreSystem
 */
class Models.CoreSystem
{

    const NAME = 'Common.Models.CoreSystem';

    const TYPE = 'object';

    public $enabled = [
        'type' => 'boolean',
    ];

    public $parameters = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];


}

