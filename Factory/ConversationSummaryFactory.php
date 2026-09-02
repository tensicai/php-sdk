<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ConversationSummary;

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
