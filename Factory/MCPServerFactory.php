<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\MCPServer;

/**
 * @method static MCPServer fromArray(mixed[] $array)
 * @method static MCPServer fromRecordData(mixed[] $array)
 */
class MCPServerFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return MCPServer::class;
    }
}
