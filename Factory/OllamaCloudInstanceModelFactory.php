<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\OllamaCloudInstanceModel;

/**
 * @method static OllamaCloudInstanceModel fromArray(mixed[] $array)
 * @method static OllamaCloudInstanceModel fromRecordData(mixed[] $array)
 */
class OllamaCloudInstanceModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OllamaCloudInstanceModel::class;
    }
}
