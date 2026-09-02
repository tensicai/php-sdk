<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SpeechToTextModelUpdate;

/**
 * @method static SpeechToTextModelUpdate fromArray(mixed[] $array)
 * @method static SpeechToTextModelUpdate fromRecordData(mixed[] $array)
 */
class SpeechToTextModelUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SpeechToTextModelUpdate::class;
    }
}
