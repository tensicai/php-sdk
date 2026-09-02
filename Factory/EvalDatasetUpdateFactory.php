<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\EvalDatasetUpdate;

/**
 * @method static EvalDatasetUpdate fromArray(mixed[] $array)
 * @method static EvalDatasetUpdate fromRecordData(mixed[] $array)
 */
class EvalDatasetUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return EvalDatasetUpdate::class;
    }
}
