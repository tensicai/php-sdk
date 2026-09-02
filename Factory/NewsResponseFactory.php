<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\NewsResponse;

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
