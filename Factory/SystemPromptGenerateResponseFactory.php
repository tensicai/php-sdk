<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SystemPromptGenerateResponse;

/**
 * @method static SystemPromptGenerateResponse fromArray(mixed[] $array)
 * @method static SystemPromptGenerateResponse fromRecordData(mixed[] $array)
 */
class SystemPromptGenerateResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SystemPromptGenerateResponse::class;
    }
}
