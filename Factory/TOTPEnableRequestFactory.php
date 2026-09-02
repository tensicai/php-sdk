<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TOTPEnableRequest;

/**
 * @method static TOTPEnableRequest fromArray(mixed[] $array)
 * @method static TOTPEnableRequest fromRecordData(mixed[] $array)
 */
class TOTPEnableRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TOTPEnableRequest::class;
    }
}
