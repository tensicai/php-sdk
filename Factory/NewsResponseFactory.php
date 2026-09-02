<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\NewsResponse;

/**
 * @method static NewsResponse fromArray(mixed[] $array)
 * @method static NewsResponse fromRecordData(mixed[] $array)
 */
class NewsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return NewsResponse::class;
    }
}
