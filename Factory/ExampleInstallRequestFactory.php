<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ExampleInstallRequest;

/**
 * @method static ExampleInstallRequest fromArray(mixed[] $array)
 * @method static ExampleInstallRequest fromRecordData(mixed[] $array)
 */
class ExampleInstallRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ExampleInstallRequest::class;
    }
}
