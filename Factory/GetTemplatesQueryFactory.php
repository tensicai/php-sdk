<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetTemplatesQuery;

/**
 * @method static GetTemplatesQuery fromArray(mixed[] $array)
 * @method static GetTemplatesQuery fromRecordData(mixed[] $array)
 */
class GetTemplatesQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetTemplatesQuery::class;
    }
}
