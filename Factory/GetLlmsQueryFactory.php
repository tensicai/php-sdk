<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetLlmsQuery;

/**
 * @method static GetLlmsQuery fromArray(mixed[] $array)
 * @method static GetLlmsQuery fromRecordData(mixed[] $array)
 */
class GetLlmsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetLlmsQuery::class;
    }
}
