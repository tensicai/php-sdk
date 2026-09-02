<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationAnalyticsSummary;

/**
 * @method static ConversationAnalyticsSummary fromArray(mixed[] $array)
 * @method static ConversationAnalyticsSummary fromRecordData(mixed[] $array)
 */
class ConversationAnalyticsSummaryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationAnalyticsSummary::class;
    }
}
