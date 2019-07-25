<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DestinyVendorSaleItemSetComponentOfDestinyPublicVendorSaleItemComponent
 */
class DestinyVendorSaleItemSetComponentOfDestinyPublicVendorSaleItemComponent
{

    const NAME = 'DestinyVendorSaleItemSetComponentOfDestinyPublicVendorSaleItemComponent';

    const TYPE = 'object';

    public $saleItems = [
        'type' => 'object',
        'additionalProperties' => [
            'x-destiny-component-type-dependency' => 'VendorSales',
            '$ref' => '#/components/schemas/Destiny.Components.Vendors.DestinyPublicVendorSaleItemComponent',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
    ];


}

