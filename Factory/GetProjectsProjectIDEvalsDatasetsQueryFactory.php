<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDEvalsDatasetsQuery;

/**
 * @method static GetProjectsProjectIDEvalsDatasetsQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDEvalsDatasetsQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDEvalsDatasetsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDEvalsDatasetsQuery::class;
    }
}
