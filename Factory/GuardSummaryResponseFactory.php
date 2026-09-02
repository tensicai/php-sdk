<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GuardSummaryResponse;

/**
 * @method static GuardSummaryResponse fromArray(mixed[] $array)
 * @method static GuardSummaryResponse fromRecordData(mixed[] $array)
 */
class GuardSummaryResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GuardSummaryResponse::class;
    }
}
