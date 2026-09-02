<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsConversationChatIDContextQuery;

/**
 * @method static GetProjectsProjectIDAnalyticsConversationChatIDContextQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDAnalyticsConversationChatIDContextQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDAnalyticsConversationChatIDContextQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDAnalyticsConversationChatIDContextQuery::class;
    }
}
