<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\RouterNodeGenerateRequest;

/**
 * @method static RouterNodeGenerateRequest fromArray(mixed[] $array)
 * @method static RouterNodeGenerateRequest fromRecordData(mixed[] $array)
 */
class RouterNodeGenerateRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return RouterNodeGenerateRequest::class;
    }
}
