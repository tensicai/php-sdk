<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PromptActivateResponse;

/**
 * @method static PromptActivateResponse fromArray(mixed[] $array)
 * @method static PromptActivateResponse fromRecordData(mixed[] $array)
 */
class PromptActivateResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PromptActivateResponse::class;
    }
}
