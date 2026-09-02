<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\DockerTestRequest;

/**
 * @method static DockerTestRequest fromArray(mixed[] $array)
 * @method static DockerTestRequest fromRecordData(mixed[] $array)
 */
class DockerTestRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return DockerTestRequest::class;
    }
}
