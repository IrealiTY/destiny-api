<?php

namespace Destiny2\Api\Paths\GroupV2;

/**
 * IndividualGroupInviteCancel
 *
 * Cancels a pending invitation to join a group.
 */
class IndividualGroupInviteCancel
{

    const NAME = 'GroupV2.IndividualGroupInviteCancel';

    const URI = '/GroupV2/{groupId}/Members/IndividualInviteCancel/{membershipType}/{membershipId}/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

