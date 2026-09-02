<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ExampleInstallResponse;

/**
 * @method static ExampleInstallResponse fromArray(mixed[] $array)
 * @method static ExampleInstallResponse fromRecordData(mixed[] $array)
 */
class ExampleInstallResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ExampleInstallResponse::class;
    }
}
