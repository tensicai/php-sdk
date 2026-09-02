<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\OllamaModelInfo;

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
