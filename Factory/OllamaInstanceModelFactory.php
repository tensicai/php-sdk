<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OllamaInstanceModel;

/**
 * @method static OllamaInstanceModel fromArray(mixed[] $array)
 * @method static OllamaInstanceModel fromRecordData(mixed[] $array)
 */
class OllamaInstanceModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OllamaInstanceModel::class;
    }
}
