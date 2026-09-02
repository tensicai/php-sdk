<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TeamBranding;

/**
 * @method static TeamBranding fromArray(mixed[] $array)
 * @method static TeamBranding fromRecordData(mixed[] $array)
 */
class TeamBrandingFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamBranding::class;
    }
}
