<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ExampleListResponse;

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
