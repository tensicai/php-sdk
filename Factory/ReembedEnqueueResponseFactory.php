<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ReembedEnqueueResponse;

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
