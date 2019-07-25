<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Director.DestinyActivityGraphDisplayObjectiveDefinition
 */
class Definitions.Director.DestinyActivityGraphDisplayObjectiveDefinition
{

    const NAME = 'Destiny.Definitions.Director.DestinyActivityGraphDisplayObjectiveDefinition';

    const TYPE = 'object';

    public $id = [
        'type' => 'integer',
        'description' => '$NOTE $amola 2017-01-19 This field is apparently something that CUI uses to manually wire up objectives to display info. I am unsure how it works.',
        'format' => 'uint32',
    ];

    public $objectiveHash = [
        'type' => 'integer',
        'description' => 'The objective being shown on the map.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveDefinition',
        ],
    ];


}

