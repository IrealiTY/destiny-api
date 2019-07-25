<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Requests.Actions.DestinyCharacterActionRequest
 */
class Requests.Actions.DestinyCharacterActionRequest
{

    const NAME = 'Destiny.Requests.Actions.DestinyCharacterActionRequest';

    const TYPE = 'object';

    public $characterId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $membershipType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/BungieMembershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

