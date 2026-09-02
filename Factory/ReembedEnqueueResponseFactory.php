<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ReembedEnqueueResponse;

/**
 * @method static ReembedEnqueueResponse fromArray(mixed[] $array)
 * @method static ReembedEnqueueResponse fromRecordData(mixed[] $array)
 */
class ReembedEnqueueResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ReembedEnqueueResponse::class;
    }
}
