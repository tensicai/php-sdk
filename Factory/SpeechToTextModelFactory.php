<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SpeechToTextModel;

/**
 * @method static SpeechToTextModel fromArray(mixed[] $array)
 * @method static SpeechToTextModel fromRecordData(mixed[] $array)
 */
class SpeechToTextModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SpeechToTextModel::class;
    }
}
