<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Director.DestinyActivityGraphNodeDefinition
 */
class Definitions.Director.DestinyActivityGraphNodeDefinition
{

    const NAME = 'Destiny.Definitions.Director.DestinyActivityGraphNodeDefinition';

    const TYPE = 'object';

    public $nodeId = [
        'type' => 'integer',
        'description' => 'An identifier for the Activity Graph Node, only guaranteed to be unique within its parent Activity Graph.',
        'format' => 'uint32',
    ];

    public $overrideDisplay = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'The node *may* have display properties that override the active Activity\'s display properties.',
    ];

    public $position = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyPositionDefinition',
            ],
        ],
        'description' => 'The position on the map for this node.',
    ];

    public $featuringStates = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyActivityGraphNodeFeaturingStateDefinition',
        ],
        'description' => 'The node may have various visual accents placed on it, or styles applied. These are the list of possible styles that the Node can have. The game iterates through each, looking for the first one that passes a check of the required game/character/account state in order to show that style, and then renders the node in that style.',
    ];

    public $activities = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyActivityGraphNodeActivityDefinition',
        ],
        'description' => 'The node may have various possible activities that could be active for it, however only one may be active at a time. See the DestinyActivityGraphNodeActivityDefinition for details.',
    ];

    public $states = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyActivityGraphNodeStateEntry',
        ],
        'description' => 'Represents possible states that the graph node can be in. These are combined with some checking that happens in the game client and server to determine which state is actually active at any given time.',
    ];


}

