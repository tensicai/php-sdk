<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\MCPProbeRequest;

/**
 * @method static MCPProbeRequest fromArray(mixed[] $array)
 * @method static MCPProbeRequest fromRecordData(mixed[] $array)
 */
class MCPProbeRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return MCPProbeRequest::class;
    }
}
