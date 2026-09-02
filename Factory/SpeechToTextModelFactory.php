<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\SpeechToTextModel;

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
