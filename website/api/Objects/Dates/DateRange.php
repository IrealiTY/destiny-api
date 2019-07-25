<?php

namespace Destiny2\Api\Objects\Dates;

/**
 * DateRange
 */
class DateRange
{

    const NAME = 'Dates.DateRange';

    const TYPE = 'object';

    public $start = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $end = [
        'type' => 'string',
        'format' => 'date-time',
    ];


}

