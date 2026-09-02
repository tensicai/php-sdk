<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAssetsTokenQuery;

/**
 * @method static GetProjectsProjectIDAssetsTokenQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDAssetsTokenQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDAssetsTokenQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDAssetsTokenQuery::class;
    }
}
