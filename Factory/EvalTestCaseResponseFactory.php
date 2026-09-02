<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\EvalTestCaseResponse;

/**
 * @method static EvalTestCaseResponse fromArray(mixed[] $array)
 * @method static EvalTestCaseResponse fromRecordData(mixed[] $array)
 */
class EvalTestCaseResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalTestCaseResponse::class;
    }
}
