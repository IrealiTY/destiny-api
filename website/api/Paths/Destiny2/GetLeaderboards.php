<?php

namespace Destiny2\Api\Destiny2;

/**
 * Gets leaderboards with the signed in user's friends and the supplied
 * destinyMembershipId as the focus. PREVIEW: This endpoint has not yet been
 * implemented. It is being returned for a preview of future functionality,
 * and for public comment/suggestion/preparation.
 */
class GetLeaderboards
{
    const NAME           = 'Destiny2.GetLeaderboards';
    const URI            = '/Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/Leaderboards/';
    const METHOD         = 'GET';
    const TAGS           = 'Destiny2,Preview';
    const OPERATION_ID   = 'Destiny2.GetLeaderboards';

    const IS_PREVIEW     = true;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Destiny.HistoricalStats.DestinyLeaderboardResults'
    ];

    public static function build()
    {

    }
}