<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\MemoryBankPreviewResponse;

/**
 * @method static MemoryBankPreviewResponse fromArray(mixed[] $array)
 * @method static MemoryBankPreviewResponse fromRecordData(mixed[] $array)
 */
class MemoryBankPreviewResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return MemoryBankPreviewResponse::class;
    }
}
