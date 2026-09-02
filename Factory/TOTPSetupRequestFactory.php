<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TOTPSetupRequest;

/**
 * @method static TOTPSetupRequest fromArray(mixed[] $array)
 * @method static TOTPSetupRequest fromRecordData(mixed[] $array)
 */
class TOTPSetupRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TOTPSetupRequest::class;
    }
}
