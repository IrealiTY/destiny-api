<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinySandboxPerkDefinition
 */
class Definitions.DestinySandboxPerkDefinition
{

    const NAME = 'Destiny.Definitions.DestinySandboxPerkDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'These display properties are by no means guaranteed to be populated. Usually when it is, it\'s only because we back-filled them with the displayProperties of some Talent Node or Plug item that happened to be uniquely providing that perk.',
    ];

    public $perkIdentifier = [
        'type' => 'string',
        'description' => 'The string identifier for the perk.',
    ];

    public $isDisplayable = [
        'type' => 'boolean',
        'description' => 'If true, you can actually show the perk in the UI. Otherwise, it doesn\'t have useful player-facing information.',
    ];

    public $damageType = [
        'type' => 'integer',
        'description' => 'If this perk grants a damage type to a weapon, the damage type will be defined here.
Unless you have a compelling reason to use this enum value, use the damageTypeHash instead to look up the actual DestinyDamageTypeDefinition.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DamageType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $damageTypeHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for looking up the DestinyDamageTypeDefinition, if this perk has a damage type.
This is preferred over using the damageType enumeration value, which has been left purely because it is occasionally convenient.',
        'format' => 'uint32',
        'nullable' => true,
    ];

    public $perkGroups = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.DestinyTalentNodeStepGroups',
            ],
        ],
        'description' => 'An old holdover from the original Armory, this was an attempt to group perks by functionality.
It is as yet unpopulated, and there will be quite a bit of work needed to restore it to its former working order.',
    ];

    public $hash = [
        'type' => 'integer',
        'description' => 'The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.
When entities refer to each other in Destiny content, it is this hash that they are referring to.',
        'format' => 'uint32',
    ];

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the entity as it was found in the investment tables.',
        'format' => 'int32',
    ];

    public $redacted = [
        'type' => 'boolean',
        'description' => 'If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!',
    ];


}

