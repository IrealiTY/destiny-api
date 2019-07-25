<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Items.DestinyItemSocketState
 */
class Entities.Items.DestinyItemSocketState
{

    const NAME = 'Destiny.Entities.Items.DestinyItemSocketState';

    const TYPE = 'object';

    public $plugHash = [
        'type' => 'integer',
        'description' => 'The currently active plug, if any.
Note that, because all plugs are statically defined, its effect on stats and perks can be statically determined using the plug item\'s definition. The stats and perks can be taken at face value on the plug item as the stats and perks it will provide to the user/item.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $isEnabled = [
        'type' => 'boolean',
        'description' => 'Even if a plug is inserted, it doesn\'t mean it\'s enabled.
This flag indicates whether the plug is active and providing its benefits.',
    ];

    public $isVisible = [
        'type' => 'boolean',
        'description' => 'A plug may theoretically provide benefits but not be visible - for instance, some older items use a plug\'s damage type perk to modify their own damage type. These, though they are not visible, still affect the item. This field indicates that state.
An invisible plug, while it provides benefits if it is Enabled, cannot be directly modified by the user.',
    ];

    public $enableFailIndexes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'If a plug is inserted but not enabled, this will be populated with indexes into the plug item definition\'s plug.enabledRules property, so that you can show the reasons why it is not enabled.',
    ];

    public $reusablePlugHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'If the item supports reusable plugs, this is the list of plug item hashes that are currently allowed to be used for this socket. See the "reusablePlugs" property, which has rendered this obsolete, for more information.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $plugObjectives = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Quests.DestinyObjectiveProgress',
        ],
        'description' => 'Sometimes, Plugs may have objectives: generally, these are used for flavor and display purposes. For instance, a Plug might be tracking the number of PVP kills you have made. It will use the parent item\'s data about that tracking status to determine what to show, and will generally show it using the DestinyObjectiveDefinition\'s progressDescription property. Refer to the plug\'s itemHash and objective property for more information if you would like to display even more data.',
    ];

    public $reusablePlugs = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Sockets.DestinyItemPlug',
        ],
        'description' => 'If the item supports reusable plugs, this is the list of plugs that are allowed to be used for the socket, and any relevant information about whether they are "enabled", whether they are allowed to be inserted, and any other information such as objectives.
A Reusable Plug is a plug that you can always insert into this socket as long as its insertion rules are passed, regardless of whether or not you have the plug in your inventory. An example of it failing an insertion rule would be if it has an Objective that needs to be completed before it can be inserted, and that objective hasn\'t been completed yet.
In practice, a socket will *either* have reusable plugs *or* it will allow for plugs in your inventory to be inserted. See DestinyInventoryItemDefinition.socket for more info.',
    ];


}

