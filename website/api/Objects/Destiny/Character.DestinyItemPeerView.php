<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Character.DestinyItemPeerView
 */
class Character.DestinyItemPeerView
{

    const NAME = 'Destiny.Character.DestinyItemPeerView';

    const TYPE = 'object';

    public $itemHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the item in question. Use it to look up the DestinyInventoryItemDefinition of the item for static rendering data.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $dyes = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DyeReference',
        ],
        'description' => 'The list of dyes that have been applied to this item.',
    ];


}

