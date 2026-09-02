<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\SpeechToTextModelCreate;

/**
 * @method static SpeechToTextModelCreate fromArray(mixed[] $array)
 * @method static SpeechToTextModelCreate fromRecordData(mixed[] $array)
 */
class SpeechToTextModelCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return SpeechToTextModelCreate::class;
    }
}
