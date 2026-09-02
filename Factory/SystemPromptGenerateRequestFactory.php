<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SystemPromptGenerateRequest;

/**
 * @method static SystemPromptGenerateRequest fromArray(mixed[] $array)
 * @method static SystemPromptGenerateRequest fromRecordData(mixed[] $array)
 */
class SystemPromptGenerateRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SystemPromptGenerateRequest::class;
    }
}
