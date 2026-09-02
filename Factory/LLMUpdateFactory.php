<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\LLMUpdate;

/**
 * @method static LLMUpdate fromArray(mixed[] $array)
 * @method static LLMUpdate fromRecordData(mixed[] $array)
 */
class LLMUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return LLMUpdate::class;
    }
}
