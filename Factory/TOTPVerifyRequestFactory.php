<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TOTPVerifyRequest;

/**
 * @method static TOTPVerifyRequest fromArray(mixed[] $array)
 * @method static TOTPVerifyRequest fromRecordData(mixed[] $array)
 */
class TOTPVerifyRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TOTPVerifyRequest::class;
    }
}
