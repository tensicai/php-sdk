<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ConversationContextMetric;

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
