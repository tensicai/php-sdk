<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\PromptVersionResponse;

/**
 * @method static PromptVersionResponse fromArray(mixed[] $array)
 * @method static PromptVersionResponse fromRecordData(mixed[] $array)
 */
class PromptVersionResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PromptVersionResponse::class;
    }
}
