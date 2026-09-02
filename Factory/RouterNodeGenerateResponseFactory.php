<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\RouterNodeGenerateResponse;

/**
 * @method static RouterNodeGenerateResponse fromArray(mixed[] $array)
 * @method static RouterNodeGenerateResponse fromRecordData(mixed[] $array)
 */
class RouterNodeGenerateResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return RouterNodeGenerateResponse::class;
    }
}
