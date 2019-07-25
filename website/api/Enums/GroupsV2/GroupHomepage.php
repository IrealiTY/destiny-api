<?php

namespace Destiny2\Api\Enums\GroupsV2;

/**
 * GroupHomepage
 */
class GroupHomepage
{

    const NAME = 'GroupsV2.GroupHomepage';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Wall' => '0',
        'Forum' => '1',
        'AllianceForum' => '2',
    ];


}

