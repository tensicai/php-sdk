<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OllamaModelPullResponse;

/**
 * @method static OllamaModelPullResponse fromArray(mixed[] $array)
 * @method static OllamaModelPullResponse fromRecordData(mixed[] $array)
 */
class OllamaModelPullResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OllamaModelPullResponse::class;
    }
}
