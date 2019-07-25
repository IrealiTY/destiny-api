<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Responses.DestinyCollectibleNodeDetailResponse
 */
class Responses.DestinyCollectibleNodeDetailResponse
{

    const NAME = 'Destiny.Responses.DestinyCollectibleNodeDetailResponse';

    const TYPE = 'object';

    public $collectibles = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/SingleComponentResponseOfDestinyCollectiblesComponent',
            ],
        ],
        'description' => 'COMPONENT TYPE: Collectibles',
        'x-destiny-component-type-dependency' => 'Collectibles',
    ];

    public $collectibleItemComponents = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/DestinyItemComponentSetOfuint32',
            ],
        ],
        'description' => 'Item components, keyed by the item hash of the items pointed at collectibles found under the requested Presentation Node.
NOTE: I had a lot of hemming and hawing about whether these should be keyed by collectible hash or item hash... but ultimately having it be keyed by item hash meant that UI that already uses DestinyItemComponentSet data wouldn\'t have to have a special override to do the collectible -> item lookup once you delve into an item\'s details, and it also meant that you didn\'t have to remember that the Hash being used as the key for plugSets was different from the Hash being used for the other Dictionaries. As a result, using the Item Hash felt like the least crappy solution.
We may all come to regret this decision. We will see.
COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.]',
    ];


}

