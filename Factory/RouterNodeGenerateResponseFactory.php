<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\RouterNodeGenerateResponse;

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
