<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsConversationsQuery;

/**
 * @method static GetProjectsProjectIDAnalyticsConversationsQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDAnalyticsConversationsQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDAnalyticsConversationsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDAnalyticsConversationsQuery::class;
    }
}
