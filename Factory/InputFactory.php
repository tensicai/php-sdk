<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\Input;

/**
 * @method static Input fromArray(mixed[] $array)
 * @method static Input fromRecordData(mixed[] $array)
 */
class InputFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Input::class;
    }
}
