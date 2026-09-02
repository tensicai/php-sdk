<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\EvalDatasetCreate;

/**
 * @method static EvalDatasetCreate fromArray(mixed[] $array)
 * @method static EvalDatasetCreate fromRecordData(mixed[] $array)
 */
class EvalDatasetCreateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalDatasetCreate::class;
    }
}
