<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ToolChoice;

/**
 * @method static ToolChoice fromArray(mixed[] $array)
 * @method static ToolChoice fromRecordData(mixed[] $array)
 */
class ToolChoiceFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ToolChoice::class;
    }
}
