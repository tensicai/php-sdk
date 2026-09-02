<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsConversationChatIDContextQuery;

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
