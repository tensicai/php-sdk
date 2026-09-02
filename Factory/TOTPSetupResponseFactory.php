<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TOTPSetupResponse;

/**
 * @method static TOTPSetupResponse fromArray(mixed[] $array)
 * @method static TOTPSetupResponse fromRecordData(mixed[] $array)
 */
class TOTPSetupResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TOTPSetupResponse::class;
    }
}
