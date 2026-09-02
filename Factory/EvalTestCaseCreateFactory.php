<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\EvalTestCaseCreate;

/**
 * @method static EvalTestCaseCreate fromArray(mixed[] $array)
 * @method static EvalTestCaseCreate fromRecordData(mixed[] $array)
 */
class EvalTestCaseCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalTestCaseCreate::class;
    }
}
