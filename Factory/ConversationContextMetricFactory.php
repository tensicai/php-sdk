<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ConversationContextMetric;

/**
 * @method static ConversationContextMetric fromArray(mixed[] $array)
 * @method static ConversationContextMetric fromRecordData(mixed[] $array)
 */
class ConversationContextMetricFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ConversationContextMetric::class;
    }
}
