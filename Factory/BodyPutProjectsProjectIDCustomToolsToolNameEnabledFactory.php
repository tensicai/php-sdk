<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\BodyPutProjectsProjectIDCustomToolsToolNameEnabled;

/**
 * @method static BodyPutProjectsProjectIDCustomToolsToolNameEnabled fromArray(mixed[] $array)
 * @method static BodyPutProjectsProjectIDCustomToolsToolNameEnabled fromRecordData(mixed[] $array)
 */
class BodyPutProjectsProjectIDCustomToolsToolNameEnabledFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return BodyPutProjectsProjectIDCustomToolsToolNameEnabled::class;
    }
}
