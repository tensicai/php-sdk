<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetProjectsProjectIDEvalsDatasetsQuery;

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
