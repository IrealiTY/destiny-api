<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorDefinition
 */
class Definitions.DestinyVendorDefinition
{

    const NAME = 'Destiny.Definitions.DestinyVendorDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDisplayPropertiesDefinition',
    ];

    public $buyString = [
        'type' => 'string',
        'description' => 'If the vendor has a custom localized string describing the "buy" action, that is returned here.',
    ];

    public $sellString = [
        'type' => 'string',
        'description' => 'Ditto for selling. Not that you can sell items to a vendor anymore. Will it come back? Who knows. The string\'s still there.',
    ];

    public $displayItemHash = [
        'type' => 'integer',
        'description' => 'If the vendor has an item that should be displayed as the "featured" item, this is the hash identifier for that DestinyVendorItemDefinition.
Apparently this is usually a related currency, like a reputation token. But it need not be restricted to that.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $inhibitBuying = [
        'type' => 'boolean',
        'description' => 'If this is true, you aren\'t allowed to buy whatever the vendor is selling.',
    ];

    public $inhibitSelling = [
        'type' => 'boolean',
        'description' => 'If this is true, you\'re not allowed to sell whatever the vendor is buying.',
    ];

    public $factionHash = [
        'type' => 'integer',
        'description' => 'If the Vendor has a faction, this hash will be valid and point to a DestinyFactionDefinition.
The game UI and BNet often mine the faction definition for additional elements and details to place on the screen, such as the faction\'s Progression status (aka "Reputation").',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyFactionDefinition',
        ],
    ];

    public $resetIntervalMinutes = [
        'type' => 'integer',
        'description' => 'A number used for calculating the frequency of a vendor\'s inventory resetting/refreshing.
Don\'t worry about calculating this - we do it on the server side and send you the next refresh date with the live data.',
        'format' => 'int32',
    ];

    public $resetOffsetMinutes = [
        'type' => 'integer',
        'description' => 'Again, used for reset/refreshing of inventory. Don\'t worry too much about it. Unless you want to.',
        'format' => 'int32',
    ];

    public $failureStrings = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
        ],
        'description' => 'If an item can\'t be purchased from the vendor, there may be many "custom"/game state specific reasons why not.
This is a list of localized strings with messages for those custom failures. The live BNet data will return a failureIndexes property for items that can\'t be purchased: using those values to index into this array, you can show the user the appropriate failure message for the item that can\'t be bought.',
    ];

    public $unlockRanges = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Dates.DateRange',
        ],
        'description' => 'If we were able to predict the dates when this Vendor will be visible/available, this will be the list of those date ranges. Sadly, we\'re not able to predict this very frequently, so this will often be useless data.',
    ];

    public $vendorIdentifier = [
        'type' => 'string',
        'description' => 'The internal identifier for the Vendor. A holdover from the old days of Vendors, but we don\'t have time to refactor it away.',
    ];

    public $vendorPortrait = [
        'type' => 'string',
        'description' => 'A portrait of the Vendor\'s smiling mug. Or frothing tentacles.',
    ];

    public $vendorBanner = [
        'type' => 'string',
        'description' => 'If the vendor has a custom banner image, that can be found here.',
    ];

    public $enabled = [
        'type' => 'boolean',
        'description' => 'If a vendor is not enabled, we won\'t even save the vendor\'s definition, and we won\'t return any items or info about them. It\'s as if they don\'t exist.',
    ];

    public $visible = [
        'type' => 'boolean',
        'description' => 'If a vendor is not visible, we still have and will give vendor definition info, but we won\'t use them for things like Advisors or UI.',
    ];

    public $vendorSubcategoryIdentifier = [
        'type' => 'string',
        'description' => 'The identifier of the VendorCategoryDefinition for this vendor\'s subcategory.',
    ];

    public $consolidateCategories = [
        'type' => 'boolean',
        'description' => 'If TRUE, consolidate categories that only differ by trivial properties (such as having minor differences in name)',
    ];

    public $actions = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorActionDefinition',
        ],
        'description' => 'Describes "actions" that can be performed on a vendor. Currently, none of these exist. But theoretically a Vendor could let you interact with it by performing actions. We\'ll see what these end up looking like if they ever get used.',
    ];

    public $categories = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorCategoryEntryDefinition',
        ],
        'description' => 'These are the headers for sections of items that the vendor is selling. When you see items organized by category in the header, it is these categories that it is showing.
Well, technically not *exactly* these. On BNet, it doesn\'t make sense to have categories be "paged" as we do in Destiny, so we run some heuristics to attempt to aggregate pages of categories together. 
These are the categories post-concatenation, if the vendor had concatenation applied. If you want the pre-aggregated category data, use originalCategories.',
    ];

    public $originalCategories = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorCategoryEntryDefinition',
        ],
        'description' => 'See the categories property for a description of categories and why originalCategories exists.',
    ];

    public $displayCategories = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyDisplayCategoryDefinition',
        ],
        'description' => 'Display Categories are different from "categories" in that these are specifically for visual grouping and display of categories in Vendor UI. 
The "categories" structure is for validation of the contained items, and can be categorized entirely separately from "Display Categories", there need be and often will be no meaningful relationship between the two.',
    ];

    public $interactions = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorInteractionDefinition',
        ],
        'description' => 'In addition to selling items, vendors can have "interactions": UI where you "talk" with the vendor and they offer you a reward, some item, or merely acknowledge via dialog that you did something cool.',
    ];

    public $inventoryFlyouts = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorInventoryFlyoutDefinition',
        ],
        'description' => 'If the vendor shows you items from your own inventory - such as the Vault vendor does - this data describes the UI around showing those inventory buckets and which ones get shown.',
    ];

    public $itemList = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorItemDefinition',
        ],
        'description' => 'If the vendor sells items (or merely has a list of items to show like the "Sack" vendors do), this is the list of those items that the vendor can sell. From this list, only a subset will be available from the vendor at any given time, selected randomly and reset on the vendor\'s refresh interval.
Note that a vendor can sell the same item multiple ways: for instance, nothing stops a vendor from selling you some specific weapon but using two different currencies, or the same weapon at multiple "item levels".',
    ];

    public $services = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorServiceDefinition',
        ],
        'description' => 'BNet doesn\'t use this data yet, but it appears to be an optional list of flavor text about services that the Vendor can provide.',
    ];

    public $acceptedItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorAcceptedItemDefinition',
        ],
        'description' => 'If the Vendor is actually a vehicle for the transferring of items (like the Vault and Postmaster vendors), this defines the list of source->destination buckets for transferring.',
    ];

    public $returnWithVendorRequest = [
        'type' => 'boolean',
        'description' => 'As many of you know, Vendor data has historically been pretty brutal on the BNet servers. In an effort to reduce this workload, only Vendors with this flag set will be returned on Vendor requests. This allows us to filter out Vendors that don\'t dynamic data that\'s particularly useful: things like "Preview/Sack" vendors, for example, that you can usually suss out the details for using just the definitions themselves.',
    ];

    public $locations = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Vendors.DestinyVendorLocationDefinition',
        ],
        'description' => 'A vendor can be at different places in the world depending on the game/character/account state. This is the list of possible locations for the vendor, along with conditions we use to determine which one is currently active.',
    ];

    public $groups = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorGroupReference',
        ],
        'description' => 'A vendor can be a part of 0 or 1 "groups" at a time: a group being a collection of Vendors related by either location or function/purpose. It\'s used for our our Companion Vendor UI. Only one of these can be active for a Vendor at a time.',
    ];

    public $ignoreSaleItemHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'Some items don\'t make sense to return in the API, for example because they represent an action to be performed rather than an item being sold. I\'d rather we not do this, but at least in the short term this is a workable workaround.',
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
