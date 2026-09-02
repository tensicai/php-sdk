<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\Prompt;

/**
 * @method static Prompt fromArray(mixed[] $array)
 * @method static Prompt fromRecordData(mixed[] $array)
 */
class PromptFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Prompt::class;
    }
}
