<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TOTPDisableRequest;

/**
 * @method static TOTPDisableRequest fromArray(mixed[] $array)
 * @method static TOTPDisableRequest fromRecordData(mixed[] $array)
 */
class TOTPDisableRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TOTPDisableRequest::class;
    }
}
