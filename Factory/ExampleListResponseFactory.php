<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ExampleListResponse;

/**
 * @method static ExampleListResponse fromArray(mixed[] $array)
 * @method static ExampleListResponse fromRecordData(mixed[] $array)
 */
class ExampleListResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ExampleListResponse::class;
    }
}
