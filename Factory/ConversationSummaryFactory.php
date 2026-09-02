<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationSummary;

/**
 * @method static ConversationSummary fromArray(mixed[] $array)
 * @method static ConversationSummary fromRecordData(mixed[] $array)
 */
class ConversationSummaryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationSummary::class;
    }
}
