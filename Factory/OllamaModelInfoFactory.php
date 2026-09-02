<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OllamaModelInfo;

/**
 * @method static OllamaModelInfo fromArray(mixed[] $array)
 * @method static OllamaModelInfo fromRecordData(mixed[] $array)
 */
class OllamaModelInfoFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OllamaModelInfo::class;
    }
}
