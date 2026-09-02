<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\EvalTestCaseUpdate;

/**
 * @method static EvalTestCaseUpdate fromArray(mixed[] $array)
 * @method static EvalTestCaseUpdate fromRecordData(mixed[] $array)
 */
class EvalTestCaseUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalTestCaseUpdate::class;
    }
}
