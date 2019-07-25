<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyStatDisplayDefinition
 */
class Definitions.DestinyStatDisplayDefinition
{

    const NAME = 'Destiny.Definitions.DestinyStatDisplayDefinition';

    const TYPE = 'object';

    public $statHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the stat being transformed into a Display stat.
Use it to look up the DestinyStatDefinition, or key into a DestinyInventoryItemDefinition\'s stats property.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyStatDefinition',
        ],
    ];

    public $maximumValue = [
        'type' => 'integer',
        'description' => 'Regardless of the output of interpolation, this is the maximum possible value that the stat can be. It should also be used as the upper bound for displaying the stat as a progress bar (the minimum always being 0)',
        'format' => 'int32',
    ];

    public $displayAsNumeric = [
        'type' => 'boolean',
        'description' => 'If this is true, the stat should be displayed as a number. Otherwise, display it as a progress bar. Or, you know, do whatever you want. There\'s no displayAsNumeric police.',
    ];

    public $displayInterpolation = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Interpolation.InterpolationPoint',
        ],
        'description' => 'The interpolation table representing how the Investment Stat is transformed into a Display Stat. 
See DestinyStatDefinition for a description of the stages of stat transformation.',
    ];


}

