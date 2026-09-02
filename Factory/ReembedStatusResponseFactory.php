<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ReembedStatusResponse;

/**
 * @method static ReembedStatusResponse fromArray(mixed[] $array)
 * @method static ReembedStatusResponse fromRecordData(mixed[] $array)
 */
class ReembedStatusResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ReembedStatusResponse::class;
    }
}
