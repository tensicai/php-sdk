<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\DoclingTestRequest;

/**
 * @method static DoclingTestRequest fromArray(mixed[] $array)
 * @method static DoclingTestRequest fromRecordData(mixed[] $array)
 */
class DoclingTestRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return DoclingTestRequest::class;
    }
}
