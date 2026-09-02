<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\EvalRunCreate;

/**
 * @method static EvalRunCreate fromArray(mixed[] $array)
 * @method static EvalRunCreate fromRecordData(mixed[] $array)
 */
class EvalRunCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalRunCreate::class;
    }
}
