<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ReembedJobModel;

/**
 * @method static ReembedJobModel fromArray(mixed[] $array)
 * @method static ReembedJobModel fromRecordData(mixed[] $array)
 */
class ReembedJobModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ReembedJobModel::class;
    }
}
